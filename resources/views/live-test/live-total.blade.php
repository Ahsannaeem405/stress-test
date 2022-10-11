@extends('layouts.app')
@section('content')
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
                    <?php for ($i=0; $i <count($tests); $i++) {?>
                        ['Personlig udvikling', <?php echo $tests[$i]['personal'];?>],
                        ['Parforhold / Kærlighed  ', <?php echo $tests[$i]['relationship'];?>],
                        ['Venner / Familie', <?php echo $tests[$i]['family'];?>],
                        // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                        ['Børn', <?php echo $tests[$i]['children'];?>],
                        ['Arbejdsliv', <?php echo $tests[$i]['working'];?>],
                        ['Helbred ', <?php echo $tests[$i]['health'];?>],
                        ['Fritid ', <?php echo $tests[$i]['leisure'];?>],
                        ['Økonomi / Velstand', <?php echo $tests[$i]['finance'];?>],
                    <?php } ?>
                ]
            }],
            // tooltip:{
            //     useHTML: true,
            //     headerFormat: '<h2>{point.key}</h2>',
            //     pointFormat: '<h4>{point.percentage:.1f} {series.name} </h4>',
            // }
        });
    </script>

@endsection
