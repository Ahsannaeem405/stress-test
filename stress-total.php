<?php @include 'layout/header.php'?>
    <div class="StressDetailSec stressTotal">
        <div class="container">
            <div id="pie" style="height: 500px"></div>
            <div class="row">
                <div class="Innerdetail text-start">
                    <h2 class="text-center mb-4">Total: 110</h2>
                    <p class="mt-3 skycolor" style="background: #00ffff;">Stresstilstand: <strong> 00-23:</strong> I balance <span class="float-end">Du er ikke stresset</span> </p>
                    <p class="mt-3 green" style="background: #37ff37;">Stresstilstand: <strong> 24-37: </strong>Let stress <span class="float-end">Du er ikke stresset, men oplever og føler dig i perioder stresset</span> </p>
                    <p class="mt-3 yellow" style="background: #ffff00;">Stresstilstand: <strong> 38-67:</strong> Moderat stress <span class="float-end">Du er stresset og bør gøre noget ved det</span> </p>
                    <p class="mt-3 red" style="background: #ff0000;color: #fff;">Stresstilstand: <strong> 68-96:</strong> Alvorlig stress <span class="float-end">Du er stresset og skal gøre noget ved det</span> </p>
                    <p class="mt-3 mb-5 black" style="background: #000; color: #f7f7f7;">Stresstilstand: <strong> 97-:</strong> Kritisk stress <span class="float-end">Du er udmattet – og har behov for ro, restituering og hjælp</span> </p>
                </div>
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
            text: 'Live Tset Total'
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
        colors:['#3b5998', '#d34836', '#8a3ab9', '#0077B5', '#0084b4', '#bb0000'],
        series: [{
            name: 'Live Test Marks',
            data: [
                ['Konstant', 1300],
                ['Hyppigt', 375],
                ['Nogle gange', 500],
                // {name:'LinkedIn',  y:450, sliced: true,selected: true},
                ['Sjældent', 313],
                ['Aldrig', 1000]
            ]
        }],
        // tooltip:{
        //     useHTML: true,
        //     headerFormat: '<h2>{point.key}</h2>',
        //     pointFormat: '<h4>{point.percentage:.1f} {series.name} </h4>',
        // }
    });
</script>
<?php @include 'layout/footer.php'?>