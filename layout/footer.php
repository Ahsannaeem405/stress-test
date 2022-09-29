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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
                <script>
                    //    Stress Chart
                    /**
                     * ---------------------------------------
                     * This demo was created using amCharts 4.
                     *
                     * For more information visit:
                     * https://www.amcharts.com/
                     *
                     * Documentation is available at:
                     * https://www.amcharts.com/docs/v4/
                     * ---------------------------------------
                     */

// Create chart instance
                    var chart = am4core.create("chartdiv", am4charts.PieChart);

                    // Add data
                    chart.data = [{
                        "country": "Lithuania",
                        "value": 501.9
                    }, {
                        "country": "Czechia",
                        "value": 301.9
                    }, {
                        "country": "Ireland",
                        "value": 201.1
                    }, {
                        "country": "Germany",
                        "value": 165.8
                    }, {
                        "country": "Australia",
                        "value": 139.9
                    }, {
                        "country": "Austria",
                        "value": 128.3
                    }];

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "value";
                    pieSeries.dataFields.category = "country";
                    pieSeries.labels.template.disabled = true;
                    pieSeries.ticks.template.disabled = true;

                    chart.legend = new am4charts.Legend();
                    chart.legend.position = "right";

                    chart.innerRadius = am4core.percent(60);

                    var label = pieSeries.createChild(am4core.Label);
                    label.text = "${values.value.sum}";
                    label.horizontalCenter = "middle";
                    label.verticalCenter = "middle";
                    label.fontSize = 40;
                </script>
        <script>
            var items = $(".list-wrapper .list-item");
            var numItems = items.length;
            var perPage = 4;

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
                        backgroundColor: [
                            "#2ecc71",
                            "#3498db",
                            "#ccc",
                            "#000",
                            "#ddd",
                        ],
                        data: [12, 19, 10, 34, 24]
                    }]
                }
            });

        </script>
    </body>
</html>