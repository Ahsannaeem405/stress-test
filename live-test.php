<?php @include 'layout/header.php'?>
    <div class="StressTestSec">
        <div class="container">
            <div class="row">
                <h2>Arbejdsstress test</h2>
                <p>Har du i løbet af den sidste måned flere gange oplevet at have:</p>
                <table cellspacing="0" cellpadding="0" class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Konstant</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Været træt og uoplagt?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Været træt og uoplagt?</td>
                            <td>
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range"  min="0" max="9" value="1"  class="form-range" id="customRange1">
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>