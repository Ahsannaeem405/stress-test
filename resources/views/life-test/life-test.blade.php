@extends('layouts.app')
@section('content')
<div class="StressTestSec">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Livshjuls Test</h2>
            <p class="text-center mb-5 mt-3">Hvor tilfreds er du med:</p>
            <form action="{{route('store_life_test')}}" method="POST">
                @csrf
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
                                        <p class="range-slider__value m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0"  name="personal" class="slider w-100" id="rangeSlider" required/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit parforhold/dit kærlighedsliv?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value2 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="relationship" class="slider w-100" id="rangeSlider2"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din familie/dine venner?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value3 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="family" class="slider w-100" id="rangeSlider3"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dine børn?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value4 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="children" class="slider w-100" id="rangeSlider4"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit arbejdsliv?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value5 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="working" class="slider w-100" id="rangeSlider5"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med dit helbred?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value6 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="health" class="slider w-100" id="rangeSlider6"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din fritid/dit fritidsliv? </td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value7 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="leisure" class="slider w-100" id="rangeSlider7"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Med din økonomi/velstand?</td>
                            <td>
                                <div class="range-slider">
                                    <div class="range-slider__slider">
                                        <p class="range-slider__value8 m-0 fw-bold">0</p>
                                        <input type="range" min="0" max="10" value="0" name="finance" class="slider w-100" id="rangeSlider8"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="list-item position-relative bg-white">
                            <td class="SubmitBtn" colspan="3"><button type="submit" class="btnNext text-decoration-none fw-bold" style="float: right;">Submit</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
  $(document).ready(function(){

});
</script>
