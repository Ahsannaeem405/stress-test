<?php @include 'layout/header.php'?>
    <div class="StressDetailSec stressTotal">
        <div class="container">
            <div class="StressTotalSec">
                <div class="container">
                    <div>
                        <h2 class="text-center mb-4">Total: 110</h2>
<!--                        <canvas id="myChart"></canvas>-->
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="Innerdetail text-start">
                    <p class="mt-3 skycolor" style="background: #00ffff;">Stresstilstand: <strong> 00-23:</strong> I balance <span class="float-end">Du er ikke stresset</span> </p>
                    <p class="mt-3 green" style="background: #37ff37;">Stresstilstand: <strong> 24-37: </strong>Let stress <span class="float-end">Du er ikke stresset, men oplever og føler dig i perioder stresset</span> </p>
                    <p class="mt-3 yellow" style="background: #ffff00;">Stresstilstand: <strong> 38-67:</strong> Moderat stress <span class="float-end">Du er stresset og bør gøre noget ved det</span> </p>
                    <p class="mt-3 red" style="background: #ff0000;color: #fff;">Stresstilstand: <strong> 68-96:</strong> Alvorlig stress <span class="float-end">Du er stresset og skal gøre noget ved det</span> </p>
                    <p class="mt-3 mb-5 black" style="background: #000; color: #f7f7f7;">Stresstilstand: <strong> 97-:</strong> Kritisk stress <span class="float-end">Du er udmattet – og har behov for ro, restituering og hjælp</span> </p>
                </div>
            </div>
        </div>
    </div>
<style>

</style>

<script>

</script>

<?php @include 'layout/footer.php'?>