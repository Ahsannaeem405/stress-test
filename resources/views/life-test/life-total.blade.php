@extends('layouts.app')
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-polar.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
@section('content')
  <style type="text/css">
    #container {
      width: 100%;
      height: 85%;
      margin: 0;
      padding: 0;
    }
</style>
<div id="container"></div>

<script>
    anychart.onDocumentReady(function () {
  // create polar chart
  var chart = anychart.polar();

  var columnSeries = chart.column([
    { x: 'Personlig udvikling', value: <?php echo $tests['personal'];?>, fill: '#3b5998' },
    { x: 'Parforhold / Kærlighed', value: <?php echo $tests['relationship'];?>, fill: '#d34836' },
    { x: 'Venner / Familie', value: <?php echo $tests['family'];?>, fill: '#8a3ab9' },
    { x: 'Børn', value: <?php echo $tests['children'];?>, fill: '#0077B5'  },
    { x: 'Arbejdsliv', value: <?php echo $tests['working'];?>, fill: '#0004b4'  },
    { x: 'Helbred', value: <?php echo $tests['health'];?>, fill: '#bb0000'  },
    { x: 'Fritid', value: <?php echo $tests['leisure'];?>, fill: '#ccc'  },
    { x: 'Økonomi / Velstand', value: <?php echo $tests['finance'];?>, fill: '#ffff12'  }
  ]);

  // set series name
  columnSeries.name('Life Test Marks');
//   columnSeries.color('#3b5998');

  // set title settings
  chart
    .title()
    .enabled(true)
    .text('Livshjulet')
    .padding({ bottom: 40, top: 50 });

  // disable y-axis
  chart.yAxis(false);

  // set value prefix for tooltip
//   chart.tooltip().valuePrefix('$');

  // set x-scale
  chart.xScale('ordinal');

  // set chart container id
  chart.container('container');

  // initiate chart drawing
  chart.draw();
});
</script>





{{-- <div class="LiveTotalSec">
    <div class="container">
        <div>
            <div id="pie" style="height: 500px"></div>
        </div>
    </div>
</div> --}}

    {{-- <script>
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
                        // format: '{point.name} ({point.percentage:.1f}%)',
                        format: '{point.name} ({point.y:1f})',
                        connectorWidth: 2,
                    }
                }
            },
            colors:['#3b5998', '#d34836', '#8a3ab9', '#0077B5', '#0084b4', '#bb0000', '#ccc', '#ddd'],
            series: [{
                name: 'Life Test Marks',
                data: [
                        ['Personlig udvikling', <?php echo $tests['personal'];?>],
                        ['Parforhold / Kærlighed  ', <?php echo $tests['relationship'];?>],
                        ['Venner / Familie', <?php echo $tests['family'];?>],
                        // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                        ['Børn', <?php echo $tests['children'];?>],
                        ['Arbejdsliv', <?php echo $tests['working'];?>],
                        ['Helbred ', <?php echo $tests['health'];?>],
                        ['Fritid ', <?php echo $tests['leisure'];?>],
                        ['Økonomi / Velstand', <?php echo $tests['finance'];?>],
                ]
            }],
            // tooltip:{
            //     useHTML: true,
            //     headerFormat: '<h2>{point.key}</h2>',
            //     pointFormat: '<h4>{point.percentage:.1f} {series.name} </h4>',
            // }
        });
    </script> --}}

@endsection
