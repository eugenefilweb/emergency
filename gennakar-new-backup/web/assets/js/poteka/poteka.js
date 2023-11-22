class Poteka {

    constructor({apiUrl, user_pass, swPoint, nePoint, element, poteka, potekaId, endDate, startDate, zoom}) {
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
        this.markers = [];
        this.img = null;
        this.map = this.createMapInstance();
    }

    createMapInstance() {
        return new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [this.longitude, this.latitude],
            zoom: this.zoom
        });
    }

    createMarkerElement(icon) {
        const markerElement = document.createElement('div');
        markerElement.className = 'poteka-marker';
        markerElement.id = 'marker';
        markerElement.innerHTML = `<img class="marker" id="marker" src="${icon ? icon : '/assets/svg/location-dot-solid.svg'}" alt="marker" style="width: 35px; height: 35px;">`;

        return markerElement;
    }

    //TODO fetchData(callback){
    fetchData() {
        const self = this;
        // this.markers.forEach(marker => marker.remove());
        //
        // this.markers = [];

        $(document).ready(function () {
            $.ajax({
                url: self.apiUrl,
                type: 'GET',
                data: {
                    'swPoint': self.swPoint,
                    'nePoint': self.nePoint,
                    'element': self.element,
                    'poteka': self.poteka,
                    'potekaId': self.potekaId,
                    'endDate': self.endDate,
                    // 'startDate' : self.startDate
                },
                headers: {
                    'X-POTEKA-Authorization': btoa(self.user_pass)
                },
                dataType: 'json',
                success: function (data) {
                    //TODO callback(null, data.poteka);

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

                            return `<li class="elem" data-value='${elem.elementName}'>
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

                        const markerElement = self.createMarkerElement(self.img);

                        const marker = new mapboxgl.Marker({element: markerElement})
                            .setLngLat([potekaData.stationInfo.longitude, potekaData.stationInfo.latitude])
                            .setPopup(popup)
                            .addTo(self.map);
                        // });

                        self.markers.push(marker);

                        //TODO target popup html using vanilla javascript
                        // popup._content.querySelector('.test-popup').addEventListener('click', function () {
                        //     console.log('test-popup clicked');
                        // });

                    });

                },
                error: function (xhr, error, status) {
                    console.log('xhr: ', xhr);
                    // callback(error, null);
                }
            })
        })
    }

    // init(callback){
    init() {
        this.img = localStorage.getItem('markerImg') ?? null;
        const self = this;
        // this.fetchData(callback);
        this.fetchData();
        self.map;
        // Fetch data every minute
        setInterval(() => {
            // this.fetchData(callback);
            this.fetchData();
        }, 60000); // 60000 milliseconds = 1 minute

        $(document).on('click', '.elem', function () {
            const elem = $(this).data('value');
            const markers = {
                'temp': 'hummingbird',
                'weather': 'tree',
                'rain': 'zoo',
                'solar': 'W/m²',
                'humi': '%RH',
                'wbgt': '°C',
                'option': '',
                'PM25': ''
            };

            var img =  `/assets/svg/${markers[elem]}.svg`;

            self.img = img;
            localStorage.setItem('markerImg', img);

            $('.marker').attr('src', img);

            //TODO Set the custom marker icon for all markers.
            self.markers.forEach(marker => {
                const markerElement = self.createMarkerElement(img);
                document.querySelector('.poteka-marker').firstChild.replaceWith(markerElement);
            });
        });

    }

}