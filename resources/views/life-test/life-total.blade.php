@extends('layouts.app')
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-polar.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
@section('content')
  <style type="text/css">
      #container {
  min-width: 310px;
  max-width: 800px;
  margin: 0 auto
}
</style>

<div id="container"></div>



   <script>
      var values = {{json_encode($data)}};

    

var yLabels = [
[1, 2, 3, 4, 5, 6, 7, 8, 9,10],
[1, 2, 3, 4, 5, 6, 7, 8, 9,10]
];

Highcharts.chart('container', {
title: {
    text: null  
},
chart: {
polar: true,
height: 500
},
legend: {
enabled: false
},
pane: {
startAngle: 0
},
yAxis: [
{
angle: 0,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
},
{
angle: 45,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
}, {
angle: 90,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
}, {
angle: 135,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
}, {
angle: 180,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions:[1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
}, {
angle: 225,
gridLineInterpolation: 'polygon',
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
},
{
angle: 270,
gridLineInterpolation: 'polygon',
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 10,
labels: {
  enabled: true
},
linkedTo: 0
},
{
angle: 315,
gridLineInterpolation: 'polygon',
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 8,
labels: {
  enabled: true
},
linkedTo: 0
},
{
angle: 360,
gridLineInterpolation: 'polygon',
tickPositions: [1, 2, 3, 4, 5, 6, 7, 8, 9,10],
max: 8,
labels: {
  enabled: true
},
linkedTo: 0
}
],
xAxis: {
lineWidth: 0,
tickmarkPlacement: 'on',
categories: ['Personlig udvikling', 'Parforhold / Kærlighed', 'Venner / Familie', 'Børn', 'Arbejdsliv','Helbred','Fritid','Økonomi / Velstand']
},
tooltip: {
shared: true,
formatter: function() {
  var points = this.points,
    returnStr = this.x;

  points.forEach(function(point) {
    returnStr += (
      '<br />' + point.series.name + ': ' + yLabels[point.point.x][point.y - 1]
    );
  });

  return returnStr;
}
},

series: [{
data: values
}]
});

   
    </script> 

@endsection
