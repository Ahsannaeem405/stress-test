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
                            <td>Med din personlige udvikling?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit parforhold/dit kærlighedsliv?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value2 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider2"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din familie/dine venner?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value3 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider3"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dine børn?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value4 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider4"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit arbejdsliv?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value5 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider5"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit helbred?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value6 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider6"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din fritid/dit fritidsliv? </td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value7 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider7"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din økonomi/velstand?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value8 m-0 fw-bold">1</p>
                                        <input type="range" min="0" max="9" value="1" class="slider w-100" id="rangeSlider8"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="list-item position-relative bg-white">
                            <td class="SubmitBtn" colspan="3"><a href="live-total.php" class="btnNext text-decoration-none fw-bold">Submit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>