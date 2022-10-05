            <footer>
                <div class="container">

                </div>
            </footer>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/lightslider.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
    <script>
        //    Stress Chart
        // Create chart instance
        // var chart = am4core.create("chartdiv", am4charts.PieChart);

        // // Add data
        // chart.data = [
        //     {"Test": "Konstant", "value": 201},
        //     {"Test": "Hyppigt", "value": 301},
        //     {"Test": "Nogle gange", "value": 201},
        //     {"Test": "Sjældent", "value": 165},
        //     {"Test": "Aldrig", "value": 139},
        // ];

        // // Add and configure Series
        // var pieSeries = chart.series.push(new am4charts.PieSeries());
        // pieSeries.dataFields.value = "value";
        // pieSeries.dataFields.category = "Test";
        // pieSeries.labels.template.enabled = true;
        // pieSeries.ticks.template.enabled = true;
        // // pieSeries.translate.template.disabled = true;
 
        // // chart.legend = new am4charts.Legend();
        // // chart.legend.position = "right";

        // chart.innerRadius = am4core.percent(60);

        // var label = pieSeries.createChild(am4core.Label);
        // // label.text = "{values.value.sum}";
        // label.horizontalCenter = "middle";
        // label.verticalCenter = "middle";
        // label.fontSize = 40;

        var dataset = [
            { name: 'Konstant ', count: 242 }, { name: 'Hyppigt ', count: 2242 }, { name: 'Nogle gange', count: 3112}, { name: 'Sjældent ', count: 937 },{ name: 'Aldrig', count: 1450 }
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
                    fill:fillFunction
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
            return color(d.data.name);
        },'path1');

        createChart(svg,outerRadiusArcShadow,innerRadiusArcShadow,function(d,i){
            var c=d3.hsl(color(d.data.name));
            return d3.hsl((c.h+5), (c.s -.07), (c.l -.15));
        },'path2');

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

    <script>
        // Pagination
        var items = $(".list-wrapper .list-item");
        var numItems = items.length;
        var perPage = 5;

        items.slice(perPage).hide();

        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "Previous",
            nextText: "Next",
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });

        // Pie Chart
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Konstant ", "Hyppigt", "Nogle gange", "Sjældent", "Aldrig"],
                datasets: [{
                    backgroundColor: [ "#2ecc71", "#3498db", "#ccc", "#000", "#ddd", ],
                    data: [12, 19, 10, 34, 24]
                }]
            }
        });

    </script>
</body>
</html>