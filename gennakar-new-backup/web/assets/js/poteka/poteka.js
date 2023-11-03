class Poteka {

    constructor({apiUrl, user_pass, swPoint, nePoint, element, poteka, potekaId, endDate, startDate, zoom }){
        mapboxgl.accessToken = 'pk.eyJ1Ijoicm9lbGZpbHdlYiIsImEiOiJjbGh6am1tankwZzZzM25yczRhMWhhdXRmIn0.aLWnLb36hKDFVFmKsClJkg';
        this.apiUrl = apiUrl;
        this.user_pass = user_pass;
        this.swPoint = swPoint;
        this.nePoint = nePoint;
        this.element = element;
        this.poteka = poteka;
        this.potekaId = potekaId;
        this.endDate = endDate;
        this.startDate = startDate;
        this.zoom = 12;
        this.longitude = 121.45;
        this.latitude = 14.45;
        this.map = this.createMapInstance();
    }

    createMapInstance(){
        return new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [this.longitude, this.latitude],
            zoom: this.zoom
        });
    }

    fetchData(callback){
        const self = this;
        $(document).ready(function(){
            $.ajax({
                url: self.apiUrl,
                type: 'GET',
                data: {
                    'swPoint': self.swPoint,
                    'nePoint': self.nePoint,
                    'element': self.element,
                    'poteka' : self.poteka,
                    'potekaId': self.potekaId,
                    'endDate' : self.endDate,
                },
                headers: {
                    'X-POTEKA-Authorization': btoa(self.user_pass)
                },
                dataType: 'json',
                success: function(data){
                    // callback(null, data.poteka);
                    // console.log('Data: ',data);

                    data.poteka.map(potekaData => {

                        let utcDate = new Date(potekaData.element[6].dataList[0].datatime);
                        let pstDate = utcDate.toLocaleString("en-US", {
                            timeZone: "Asia/Manila",
                            hour12: true,
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit'
                        });

                        const mappedElements = potekaData.element.map(elem => {
                            const units = {
                                'temp': '°C',
                                'weather': '',
                                'rain': '',
                                'solar': 'W/m²',
                                'humi': '%RH',
                                'wbgt': '°C',
                                'option': '',
                                'PM25': ''
                            };

                            return `<li>
                                    <div><span>${elem.elementName}: </span> ${elem.dataList[0].value} ${units[elem.elementName]}</div>
                                </li>`;
                        }).join('');

                        // markers.forEach(function(marker) {
                        var popup = new mapboxgl.Popup({offset: 25}).setHTML(
                            `<div class="">
                                <h3 class="text-center">${potekaData.stationInfo.stationName}</h3>
                                <hr>
                                <ul class="list-unstyled">
                                    <li><span>Station Information</span></li>
                                    <li><span>Id:</span> ${potekaData.stationInfo.stationId}</li>
                                    <li><span>Longitude:</span> ${potekaData.stationInfo.longitude}</li>
                                    <li><span>Latitude:</span> ${potekaData.stationInfo.latitude}</li>
                                </ul>
                                <hr>
                                <ul class="list-unstyled">
                                    <li><span>Elements</span></li>
                                    ${mappedElements}
                                </ul>
                                <hr>
                                <div class="text-right">${pstDate}</div>
                            </div>`
                        );

                        new mapboxgl.Marker()
                            .setLngLat([potekaData.stationInfo.longitude, potekaData.stationInfo.latitude])
                            .setPopup(popup)
                            .addTo(self.map);
                        // });

                    });

                },
                error: function(xhr,error, status ){
                    // console.log(xhr);
                    callback(error, null);
                }
            })
        })

    }

     init(callback){
        const self = this;
        this.fetchData(callback);
        self.map;
        // Fetch data every minute
        setInterval(() => {
            this.fetchData(callback);
        }, 60000); // 60000 milliseconds = 1 minute

    }

}