class ApexCharts {

    constructor({obj}, ...series) {
        this.series = series;
        this.obj = obj;
    }

    getSeries(series ){
        var series = [];
        var obj = Object.entries(oobj).map(([key, value]) => ({[key]: value}));

        let arra = [];
        for (let key in obj){
            let subObj = obj[key];
            let subArr = [];
            for (let subKey in subObj){
                let subSubObj = subObj[subKey];
                let subSubObjValues = Object.values(subSubObj);
                subSubObj = subSubObjValues;
                obj[key][subKey] = subSubObjValues;
            }
        }
    }

    synchronize() {
        window.Apex = {
            chart: {
                height: 160
            },
            dataLabels: {
                enabled: true
            }
        }

        var optionsLineMainCause = {
            series: [
                {
                    name: 'Vehicle Defect',
                    data: [18, 16, 24, 32]
                },
                {
                    name: 'Road Defect',
                    data: [25, 20, 35, 50]
                },
                {
                    name: 'Human Error',
                    data: [32, 22, 42, 8]
                }
            ],
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['Current Week', 'Month to Date', 'Current Quarter', 'YTD'],
                title: {
                    text: 'Period'
                }
            },
            yaxis: {
                title: {
                    text: 'Number of Accidents'
                },
                min: 1,
                max: 60,
                labels: {
                    minWidth: 5
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            },
            colors: ['#00E396', '#545454', '#77B6EA'],
            dataLabels: {
                enabled: true
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Number of Accidents Per Quarter',
                align: 'left',
                style: {
                    fontSize: '14px',
                    fontFamily: 'Helvetica, Arial, sans-serif',
                    fontWeight: 'bolder',
                    colors: undefined
                }
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                }
            },
            chart: {
                id: 'chart-main_cause',
                group: 'main_cause',
                type: 'line',
                height: 500,
                // width: 1000,
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }

            }
        };

        let elMainCause = document.querySelector("#chart-main_cause");

        var chartMainCause = new ApexCharts(elMainCause, optionsLineMainCause)
        chartMainCause.render()

        var optionsCollisionType = {
            series: [{
                data: [15, 30, 45, 60]
            }],
            colors: ['#008FFB'],
            chart: {
                id: 'chart-collision_type',
                group: 'collision_type',
                type: 'area',
            },
            yaxis: {
                labels: {
                    minWidth: 40
                }
            }
        };

        let elCollisionType = document.querySelector('#chart-collision_type');

        var chartCollisionType = new ApexCharts(elCollisionType, optionsCollisionType)
        chartCollisionType.render();
    }

    init(){

        this.series =

        synchronize(this.series);
    }
}