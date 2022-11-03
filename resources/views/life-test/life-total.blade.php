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
[0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
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
startAngle: 0,
background : {
            backgroundColor:"#F2F2F2"
        }
},

yAxis: [
{
angle: 0,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
},
linkedTo: 0
},
{
angle: 45,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
  
},
linkedTo: 0
}, {
angle: 90,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
  
},
linkedTo: 0
}, {
angle: 135,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
},
linkedTo: 0
}, {
angle: 180,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions:[0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
},
linkedTo: 0
}, {
angle: 225,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
},
linkedTo: 0
},
{
angle: 270,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],

labels: {
  enabled: true,

  "style": {   
    "font-weight": "700",
    "font-size": "8px",
      },  
},
linkedTo: 0
},
{
angle: 315,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
  
},
linkedTo: 0
},
{
angle: 360,
gridLineInterpolation: 'polygon',
showLastLabel: true,
tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
min: 0,
max: 12,
labels: {
  "style": {
    "font-weight": "700",
    "font-size": "8px",
      },
  enabled: true,
},
linkedTo: 0
}
],


xAxis: {
lineWidth: 0,
tickmarkPlacement: 'on',
categories: ['Personlig udvikling', 'Parforhold / Kærlighed', 'Venner / Familie', 'Børn', 'Arbejdsliv','Helbred','Fritid','Økonomi / Velstand']
},


series: [{
data: values
}]
});
   
    </script> 

@endsection
