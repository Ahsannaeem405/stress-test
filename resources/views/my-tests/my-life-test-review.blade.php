@extends('layouts.app')
@section('content')
<div class="lifeTotalSec">
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
                                    <p class="range-slider__value m-0 fw-bold" align="center">{{$life->personal}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->personal}}" class="slider w-100" id="rangeSlider" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit parforhold/dit kærlighedsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value2 m-0 fw-bold" align="center">{{$life->personal}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->personal}}" class="slider w-100" id="rangeSlider2" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med din familie/dine venner?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value3 m-0 fw-bold" align="center">{{$life->relationship}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->relationship}}" class="slider w-100" id="rangeSlider3" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dine børn?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value4 m-0 fw-bold" align="center">{{$life->family}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->family}}" class="slider w-100" id="rangeSlider4" disabled/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Med dit arbejdsliv?</td>
                        <td>
                            <div class="range-slider">
                                <div class="range-slider__slider">
                                    <p class="range-slider__value5 m-0 fw-bold" align="center">{{$life->children}}</p>
                                    <input type="range" min="0" max="10" value="{{$life->working}}" class="slider w-100" id="rangeSlider5" disabled/>
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
                                    <input type="range" min="0" max="10" value="{{$life->health}}" class="slider w-100" id="rangeSlider6" disabled/>
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
                                    <input type="range" min="0" max="10" value="{{$life->leisure}}" class="slider w-100" id="rangeSlider7" disabled/>
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
                                    <input type="range" min="0" max="10" value="{{$life->finance}}" class="slider w-100" id="rangeSlider8" disabled/>
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
                    format: '{point.name} ({point.y:1f})',
                    connectorWidth: 2,
                }
            }
        },
        colors:['#3b5998', '#d34836', '#8a3ab9', '#0077B5', '#0084b4', '#bb0000', '#ccc', '#ddd'],
        series: [{
            name: 'life Test Marks',
            data: [
                    ['Personlig udvikling', <?php echo $life['personal'];?>],
                    ['Parforhold / Kærlighed  ', <?php echo $life['relationship'];?>],
                    ['Venner / Familie', <?php echo $life['family'];?>],
                    // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                    ['Børn', <?php echo $life['children'];?>],
                    ['Arbejdsliv', <?php echo $life['working'];?>],
                    ['Helbred ', <?php echo $life['health'];?>],
                    ['Fritid ', <?php echo $life['leisure'];?>],
                    ['Økonomi / Velstand', <?php echo $life['finance'];?>],
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
