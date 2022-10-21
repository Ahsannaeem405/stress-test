@extends('layouts.app')
@section('content')
<div class="StressTestSec StressTestPage">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Arbejdsstress Test</h2>
            <p class="text-center mb-5 mt-3">Har du i løbet af den sidste måned flere gange oplevet at have:</p>
            
            <form method="POST" action="{{route('store_stress_test')}}" id="regForm" >
                @csrf

                <div class="table">
                    <div class="thead">
                        <ul class="list-inline">
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item">Konstant</li>
                            <li class="list-inline-item">Hyppigt</li>
                            <li class="list-inline-item">Nogle gange</li>
                            <li class="list-inline-item">Sjældent</li>
                            <li class="list-inline-item">Aldrig</li>
                        </ul>
                    </div>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tbody">
                        <div class="tab name">
                            <ul class="list-inline">
                                <li class="list-inline-item">Været træt og uoplagt?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Været anspændt?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault22"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault6"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault7"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Været irritabel og oplevet en indre modstand/modvilje?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft problemer med at slappe af?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Oplevet, at du har flere bekymringer og hele tiden tænker på problemer, selvom du har fri og skal slappe af?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></li>
                            </ul>
                        </div>
                        <div class="tab contact">
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft besvær med at koncentrere dig?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Glemt noget, nøgler, en aftale eller et møde?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft svært ved at vælge og træffe en beslutning?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Oplevet ikke at føle dig i kontrol?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Oplevet ikke at have overskud til at gøre det, du godt vil gøre?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></li>
                            </ul>
                        </div>
                        <div class="tab dob">
                            <ul class="list-inline">
                                <li class="list-inline-item">Følt dig trist til mode?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Følt dig i presset?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft manglende interesse for de ting,  du foretager dig på arbejdet/ i dagligdagen?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft en følelse af, at der er alt for meget, du skal nå på dit arbejde og i din hverdag?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Indtaget mere alkohol og kaffe, te eller medicin end sædvanlig?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></li>
                            </ul>
                        </div>
                        <div class="tab missed">
                            <ul class="list-inline">
                                <li class="list-inline-item">En uro i kroppen?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" value="4" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2"  value="3"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" value="2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2" value="1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" value="0"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Uforklarlige smerter i kroppen</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" value="4" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2"  value="3"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" value="2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2" value="1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" value="0"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft ondt i eller knugende fornemmelse i maven?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" value="4" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2"  value="3"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" value="2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2" value="1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" value="0"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft fordøjelsesproblemer,  diarré eller forstoppelse?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" value="4" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2"  value="3"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" value="2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2" value="1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" value="0"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft   midlertidig hjertebanken?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" value="4" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2"  value="3"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" value="2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2" value="1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" value="0"></li>
                            </ul>
                        </div>
                        <div class="tab login">
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft hovedpine?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Haft udslæt eller eksem?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Sovet dårligt og vågner mange gange i løbet af natten?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1"></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">Ændret dine spisevaner og spist mere usundt?</li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1" ></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault2"></li>
                                <li class="list-inline-item"><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1"></li>
                            </ul>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .row>*{
        padding-right: 0px !important;
         padding-left: 0px !important;
    }
</style>

<style>
    /* Style the form */

    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      padding: 40px;
      width: 100%;
      min-width: 300px;
    }

    /* Style the input fields */

    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */

    input.invalid {
      background-color: #ffdddd;
    }

    /*mark input deeply valid*/

    input.deep_invalid {
      background-color: #d35555;
    }

    /* Hide all steps by default: */

    .tab {
      display: none;
    }

    label {
      color: rgb(26, 24, 24);
      font-size: 17px;
      font-weight: bold;
    }

    /*button {*/
    /*  background-color: #4CAF50;*/
    /*  color: #ffffff;*/
    /*  border: none;*/
    /*  padding: 10px 20px;*/
    /*  font-size: 17px;*/
    /*  font-family: Raleway;*/
    /*  cursor: pointer;*/
    /*}*/

    /*button:hover {*/
    /*  opacity: 0.8;*/
    /*}*/

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    /*.step {*/
    /*  height: 15px;*/
    /*  width: 15px;*/
    /*  margin: 0 2px;*/
    /*  background-color: #bbbbbb;*/
    /*  border: none;*/
    /*  border-radius: 50%;*/
    /*  display: inline-block;*/
    /*  opacity: 0.5;*/
    /*}*/

    /* Mark the active step: */

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */

    .step.finish {
      background-color: transparent;
    }
    </style>
<script>
     var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");

      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";

      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");

      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm(currentTab)) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm(currentTab) {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      var step_0 = ["flexRadioDefault","flexRadioDefault1","flexRadioDefault2","flexRadioDefault3","flexRadioDefault4"];
      var step_1 = ["flexRadioDefault6","flexRadioDefault7","flexRadioDefault8","flexRadioDefault9","flexRadioDefault10"];
      var step_2 = ["flexRadioDefault11","flexRadioDefault12","flexRadioDefault13","flexRadioDefault14","flexRadioDefault15"];
      var step_3 = ["flexRadioDefault16","flexRadioDefault17","flexRadioDefault18","flexRadioDefault19","flexRadioDefault20"];
      var step_4 = ["flexRadioDefault21","flexRadioDefault22","flexRadioDefault23","flexRadioDefault24"];
    switch(currentTab)
    {
        //case 0
        case 0:
            for(i = 0; i < step_0.length; i++)
            {
                if(x[currentTab].querySelectorAll("input[name='"+step_0[i]+"']:checked").length < 1)
                {
                    // alert("1All Answers Are Required!");
                    toastr.error('Please fill all Questions!');
                    return false
                }
                else
                {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
            }
        return true;
        break;
        //case 1
        case 1:
            for(i = 0; i < step_1.length; i++)
            {
                if(x[currentTab].querySelectorAll("input[name='"+step_1[i]+"']:checked").length < 1)
                {
                    // alert("2All Answers Are Required!");
                    toastr.error('Please fill all Questions!');

                    return false
                }
                else
                {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
            }
        return true;
        break;
        //case 2
        case 2:
            for(i = 0; i < step_2.length; i++)
            {
                if(x[currentTab].querySelectorAll("input[name='"+step_2[i]+"']:checked").length < 1)
                {
                    // alert("3All Answers Are Required!");
                    toastr.error('Please fill all Questions!');

                    return false
                }
                else
                {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
            }
        return true;
        break;
        //case 3
        case 3:
            for(i = 0; i < step_3.length; i++)
            {
                if(x[currentTab].querySelectorAll("input[name='"+step_3[i]+"']:checked").length < 1)
                {
                    // alert("4All Answers Are Required!");
                    toastr.error('Please fill all Questions!');

                    return false
                }
                else
                {
                    document.getElementsByClassName("step")[currentTab].className += " finish";

                }
            }
        return true;
        break;
        //case 4
        case 4:
            for(i = 0; i < step_4.length; i++)
            {
                console.log(step_4.length);
                if(x[currentTab].querySelectorAll("input[name='"+step_4[i]+"']:checked").length < 1)
                {

                    // alert("5All Answers Are Required!");
                    toastr.error('Please fill all Questions!');

                    return false
                }
                else
                {

                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
            }
        return true;
        break;
        default:
        for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
        }
     }

      // A loop that checks every input field in the current tab:

      // If the valid status is true, mark the step as finished and valid:

      if (valid) {

        document.getElementsByClassName("step")[currentTab].className += "finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace("active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";


    }

</script>
@endsection

