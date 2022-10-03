<?php @include 'layout/header.php'?>
<div class="LiveTotalSec">
    <div class="container">
        <div>
            <div id="pie" style="height: 500px"></div>
        </div>
    </div>
</div>
    <script>
        // pie chart for stress
        Highcharts.chart('pie', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: '<h1>Livshjulet</h1>'
            },
            // subtitle: {
            //     text: 'As per statistics data 2016'
            // },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 65,
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '{point.name} ({point.percentage:.1f}%)',
                        connectorWidth: 2,
                    }
                }
            },
            colors:['#3b5998', '#d34836', '#8a3ab9', '#0077B5', '#0084b4', '#bb0000', '#ccc', '#ddd'],
            series: [{
                name: 'Live Test Marks',
                data: [
                    ['Personlig udvikling', 1300],
                    ['Parforhold / Kærlighed  ', 375],
                    ['Venner / Familie', 500],
                    // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                    ['Børn', 313],
                    ['Arbejdsliv', 1000],
                    ['Helbred ', 1000],
                    ['Fritid ', 1000],
                    ['Økonomi / Velstand', 1000],
                ]
            }],
            // tooltip:{
            //     useHTML: true,
            //     headerFormat: '<h2>{point.key}</h2>',
            //     pointFormat: '<h4>{point.percentage:.1f} {series.name} </h4>',
            // }
        });
    </script>

<?php @include 'layout/footer.php'?>