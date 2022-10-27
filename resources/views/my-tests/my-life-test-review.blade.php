@extends('layouts.app')
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-polar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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



<div class="StressTestSec">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Livshjuls Test</h2>
            <p class="text-center mb-5 mt-3">Hvor tilfreds er du med:</p>
            <table cellspacing="0" cellpadding="0" class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Med din personlige udvikling?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value m-0 fw-bold" align="center">{{$life->personal}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->personal}}" class="slider w-100" id="rangeSlider" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit parforhold/dit kærlighedsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value2 m-0 fw-bold" align="center">{{$life->relationship}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->relationship}}" class="slider w-100" id="rangeSlider2" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din familie/dine venner?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value3 m-0 fw-bold" align="center">{{$life->family}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->family}}" class="slider w-100" id="rangeSlider3" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dine børn?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value4 m-0 fw-bold" align="center">{{$life->children}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->children}}" class="slider w-100" id="rangeSlider4" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit arbejdsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value5 m-0 fw-bold" align="center">{{$life->working}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->working}}" class="slider w-100" id="rangeSlider5" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit helbred?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value6 m-0 fw-bold" align="center">{{$life->health}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->health}}" class="slider w-100" id="rangeSlider6" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din fritid/dit fritidsliv? </td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value7 m-0 fw-bold" align="center">{{$life->leisure}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->leisure}}" class="slider w-100" id="rangeSlider7" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din økonomi/velstand?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value8 m-0 fw-bold" align="center">{{$life->finance}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->finance}}" class="slider w-100" id="rangeSlider8" disabled />
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- new chart --}}
<script type="text/javascript">

    
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
    startAngle: 0
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
      enabled: true
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
      enabled: true
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
      enabled: true
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
      enabled: true
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
      enabled: true
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
      enabled: true
    },
    linkedTo: 0
  },
  {
    angle: 270,
    gridLineInterpolation: 'polygon',
    showLastLabel: true,
    tickPositions: [0,1, 2, 3, 4, 5, 6, 7, 8, 9,10],
    min: 0,
    max: 12,
    labels: {
      enabled: true
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
      enabled: true
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