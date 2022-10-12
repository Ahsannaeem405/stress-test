@extends('layouts.app')
@section('content')
<div class="LiveTotalSec">
    <div class="container">
        <div>
            <div id="pie" style="height: 500px"></div>
        </div>
    </div>
</div>
<div class="StressTestSec">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Livshjuls Test</h2>
            <p class="text-center mb-5 mt-3">Hvor tilfreds er du med:</p>
            <table cellspacing="0" cellpadding="0" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Konstant</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Med din personlige udvikling?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value m-0 fw-bold" align="center">{{$live->personal}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->personal}}" class="slider w-100" id="rangeSlider" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit parforhold/dit kærlighedsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value2 m-0 fw-bold" align="center">{{$live->personal}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->personal}}" class="slider w-100" id="rangeSlider2" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din familie/dine venner?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value3 m-0 fw-bold" align="center">{{$live->relationship}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->relationship}}" class="slider w-100" id="rangeSlider3" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dine børn?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value4 m-0 fw-bold" align="center">{{$live->family}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->family}}" class="slider w-100" id="rangeSlider4" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit arbejdsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value5 m-0 fw-bold" align="center">{{$live->children}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->working}}" class="slider w-100" id="rangeSlider5" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit helbred?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value6 m-0 fw-bold" align="center">{{$live->health}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->health}}" class="slider w-100" id="rangeSlider6" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din fritid/dit fritidsliv? </td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value7 m-0 fw-bold" align="center">{{$live->leisure}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->leisure}}" class="slider w-100" id="rangeSlider7" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din økonomi/velstand?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value8 m-0 fw-bold" align="center">{{$live->finance}}</p>
                                    <input type="range" min="0" max="10" value="{{$live->finance}}" class="slider w-100" id="rangeSlider8" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                    ['Personlig udvikling', <?php echo $live['personal'];?>],
                    ['Parforhold / Kærlighed  ', <?php echo $live['relationship'];?>],
                    ['Venner / Familie', <?php echo $live['family'];?>],
                    // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                    ['Børn', <?php echo $live['children'];?>],
                    ['Arbejdsliv', <?php echo $live['working'];?>],
                    ['Helbred ', <?php echo $live['health'];?>],
                    ['Fritid ', <?php echo $live['leisure'];?>],
                    ['Økonomi / Velstand', <?php echo $live['finance'];?>],
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
