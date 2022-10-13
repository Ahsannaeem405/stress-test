@extends('layouts.app')
@section('content')
<div class="StressDetailSec stressTotal">
    <div class="container">
        <div class="StressTotalSec">
            <div class="widget text-center mb-5">
                <h2 class="header1">Arbejdsstress Total</h2>
                <div id="chart" class="chart-container"></div>
            </div>
        </div>
        <div class="row">
            <div class="Innerdetail text-start">
                @if($total>=0 && $total<=23)
                <p class="mt-3 skycolor" style="background: #00ffff;">Stresstilstand: <strong> 00-23:</strong> I balance <span class="float-end">Du er ikke stresset</span> </p>
                @elseif($total>=24 && $total<=37)
                <p class="mt-3 green" style="background: #37ff37;">Stresstilstand: <strong> 24-37: </strong>Let stress <span class="float-end">Du er ikke stresset, men oplever og føler dig i perioder stresset</span> </p>
                @elseif($total>=38 && $total<=67)
                <p class="mt-3 yellow" style="background: #ffff00;">Stresstilstand: <strong> 38-67:</strong> Moderat stress <span class="float-end">Du er stresset og bør gøre noget ved det</span> </p>
                @elseif($total>=68 && $total<=96)
                <p class="mt-3 red" style="background: #ff0000;color: #fff;">Stresstilstand: <strong> 68-96:</strong> Alvorlig stress <span class="float-end">Du er stresset og skal gøre noget ved det</span> </p>
                @elseif($total>=97 && $total<=100)
                <p class="mt-3 mb-5 black" style="background: #000; color: #f7f7f7;">Stresstilstand: <strong> 97-:</strong> Kritisk stress <span class="float-end">Du er udmattet – og har behov for ro, restituering og hjælp</span> </p>
                @endif
            </div>
        </div>
    </div>
</div>
@push('stress-chart-script')
<script>
    var dataset = [
    { name: 'Konstant ', count: {{$constant}} },
    { name: 'Hyppigt ', count: {{$frequently}} },
    { name: 'Nogle gange', count: {{$sometime}}},
    { name: 'Sjældent ', count: {{$rarely}} },
    { name: 'Aldrig', count: {{$never}} }
    ];

    var total=0;
    dataset.forEach(function(d){
    total+= d.count;
    });

    var pie=d3.layout.pie()
    .value(function(d){return d.count})
    .sort(null);

    var w=300,h=300;

    var outerRadiusArc=w/2;
    var innerRadiusArc=100;
    var shadowWidth=10;

    var outerRadiusArcShadow=innerRadiusArc+1;
    var innerRadiusArcShadow=innerRadiusArc-shadowWidth;

    var color = d3.scale.ordinal()
    .range(['#00ffff', '#37ff37', '#ffff00', '#ff0000', '#000']);

    var svg=d3.select("#chart")
    .append("svg")
    .attr({
        width:w,
        height:h,
        // class:'shadow'
    }).append('g')
    .attr({
        transform:'translate('+w/2+','+h/2+')'
    });
    var createChart=function(svg,outerRadius,innerRadius,fillFunction,className){
    var arc=d3.svg.arc()
        .innerRadius(outerRadius)
        .outerRadius(innerRadius);

    var path=svg.selectAll('.'+className)
        .data(pie(dataset))
        .enter()
        .append('path')
        .attr({
            class:className,
            d:arc,
            fill:fillFunction,
        });

    path.transition()
        .duration(1000)
        .attrTween('d', function(d) {
            var interpolate = d3.interpolate({startAngle: 0, endAngle: 0}, d);
            return function(t) {
                return arc(interpolate(t));
            };
        });
    };

    createChart(svg,outerRadiusArc,innerRadiusArc,function(d,i){
    // return color(d.data.name);
    if(total >=0 && total<=23)
    {
        return color = "#00ffff";
    }
    if(total>=24 && total<=37)
    {
        return color = "#37ff37";
    }
    if(total>=38 && total<=67)
    {
        return color = "#ffff00";
    }
    if(total>=68 && total<=96)
    {
        return color = "#ff0000";
    }
    else
    {
        return color = "#000";
    }
    },'path1');

    // createChart(svg,outerRadiusArcShadow,innerRadiusArcShadow,function(d,i){
    // var c=d3.hsl(color(d.data.name));
    // return d3.hsl((c.h+5), (c.s -.07), (c.l -.15));
    // },'path2');

    var addText= function (text,y,size) {
    svg.append('text')
        .text(text)
        .attr({
            'text-anchor':'middle',
            y:y
        })
        .style({
            fill:'#929DAF',
            'font-size':size
        });
    };

    var restOfTheData=function(){
    addText(function(){
        return numberWithCommas(total);
    },0,'30px');

    addText(function(){
        return "Total";
    },25,'10px');
    };
    setTimeout(restOfTheData,1000);
    function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>
@endpush
@endsection
