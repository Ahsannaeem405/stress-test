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
<div class="StressTestSec StressTestPage">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Arbejdsstress Test</h2>
            <p class="text-center mb-5 mt-3">Har du i løbet af den sidste måned flere gange oplevet at have:</p>
            <table cellspacing="0" cellpadding="0" class="table list-wrapper">
                <thead>
                <tr>
                    <th></th>
                    <th>Konstant</th>
                    <th>Hyppigt</th>
                    <th>Nogle gange</th>
                    <th>Sjældent</th>
                    <th>Aldrig</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Været træt og uoplagt?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($stress->flexRadioDefault=="4")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{($stress->flexRadioDefault=="3")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($stress->flexRadioDefault=="2")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{($stress->flexRadioDefault=="1")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($stress->flexRadioDefault=="0")? "checked" : "disabled"}} ></td>
                    </tr>
                    <tr>
                        <td>Været anspændt?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" {{($stress->flexRadioDefault1=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault22" {{($stress->flexRadioDefault1=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5" {{($stress->flexRadioDefault1=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault6" {{($stress->flexRadioDefault1=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault7" {{($stress->flexRadioDefault1=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Været irritabel og oplevet en indre modstand/modvilje?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($stress->flexRadioDefault2=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($stress->flexRadioDefault2=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($stress->flexRadioDefault2=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($stress->flexRadioDefault2=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($stress->flexRadioDefault2=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft problemer med at slappe af?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($stress->flexRadioDefault3=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($stress->flexRadioDefault3=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($stress->flexRadioDefault3=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($stress->flexRadioDefault3=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($stress->flexRadioDefault3=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet, at du har flere bekymringer og hele tiden tænker på problemer, selvom du har fri og skal slappe af?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($stress->flexRadioDefault4=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($stress->flexRadioDefault4=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($stress->flexRadioDefault4=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($stress->flexRadioDefault4=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($stress->flexRadioDefault4=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft besvær med at koncentrere dig?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($stress->flexRadioDefault6=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($stress->flexRadioDefault6=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($stress->flexRadioDefault6=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($stress->flexRadioDefault6=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($stress->flexRadioDefault6=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Glemt noget, nøgler, en aftale eller et møde?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($stress->flexRadioDefault7=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($stress->flexRadioDefault7=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($stress->flexRadioDefault7=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($stress->flexRadioDefault7=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($stress->flexRadioDefault7=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft svært ved at vælge og træffe en beslutning?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($stress->flexRadioDefault8=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($stress->flexRadioDefault8=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($stress->flexRadioDefault8=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($stress->flexRadioDefault8=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($stress->flexRadioDefault8=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet ikke at føle dig i kontrol?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($stress->flexRadioDefault9=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2" {{($stress->flexRadioDefault9=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($stress->flexRadioDefault9=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2" {{($stress->flexRadioDefault9=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($stress->flexRadioDefault9=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet ikke at have overskud til at gøre det, du godt vil gøre?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($stress->flexRadioDefault10=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2" {{($stress->flexRadioDefault10=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($stress->flexRadioDefault10=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2" {{($stress->flexRadioDefault10=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($stress->flexRadioDefault10=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Følt dig trist til mode?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($stress->flexRadioDefaul11=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2" {{($stress->flexRadioDefault11=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($stress->flexRadioDefault11=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2" {{($stress->flexRadioDefault11=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($stress->flexRadioDefault11=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Følt dig i presset?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($stress->flexRadioDefault12=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2" {{($stress->flexRadioDefault12=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($stress->flexRadioDefault12=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2" {{($stress->flexRadioDefault12=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($stress->flexRadioDefault12=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft manglende interesse for de ting,  du foretager dig på arbejdet/ i dagligdagen?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($stress->flexRadioDefault13=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2" {{($stress->flexRadioDefault13=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($stress->flexRadioDefault13=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2" {{($stress->flexRadioDefault13=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($stress->flexRadioDefault13=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft en følelse af, at der er alt for meget, du skal nå på dit arbejde og i din hverdag?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($stress->flexRadioDefault14=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2" {{($stress->flexRadioDefault14=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($stress->flexRadioDefault14=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2" {{($stress->flexRadioDefault14=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($stress->flexRadioDefault14=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Indtaget mere alkohol og kaffe, te eller medicin end sædvanlig?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($stress->flexRadioDefault15=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2" {{($stress->flexRadioDefault15=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($stress->flexRadioDefault15=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2" {{($stress->flexRadioDefault15=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($stress->flexRadioDefault15=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>En uro i kroppen?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($stress->flexRadioDefault16=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2" {{($stress->flexRadioDefault16=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($stress->flexRadioDefault16=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2" {{($stress->flexRadioDefault16=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($stress->flexRadioDefault16=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Uforklarlige smerter i kroppen</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($stress->flexRadioDefault17=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2" {{($stress->flexRadioDefault17=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($stress->flexRadioDefault17=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2" {{($stress->flexRadioDefault17=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($stress->flexRadioDefault17=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft ondt i eller knugende fornemmelse i maven?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($stress->flexRadioDefault18=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2" {{($stress->flexRadioDefault18=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($stress->flexRadioDefault18=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2" {{($stress->flexRadioDefault18=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($stress->flexRadioDefault18=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft fordøjelsesproblemer,  diarré eller forstoppelse?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($stress->flexRadioDefault19=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2" {{($stress->flexRadioDefault19=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($stress->flexRadioDefault19=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2" {{($stress->flexRadioDefault19=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($stress->flexRadioDefault19=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft   midlertidig hjertebanken?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($stress->flexRadioDefault20=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2" {{($stress->flexRadioDefault20=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($stress->flexRadioDefault20=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2" {{($stress->flexRadioDefault20=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($stress->flexRadioDefault20=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft hovedpine?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($stress->flexRadioDefault21=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2" {{($stress->flexRadioDefault21=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($stress->flexRadioDefault21=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2" {{($stress->flexRadioDefault21=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($stress->flexRadioDefault21=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft udslæt eller eksem?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($stress->flexRadioDefault22=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2" {{($stress->flexRadioDefault22=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($stress->flexRadioDefault22=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2" {{($stress->flexRadioDefault22=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($stress->flexRadioDefault22=="0")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Sovet dårligt og vågner mange gange i løbet af natten?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($stress->flexRadioDefault23=="4")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2" {{($stress->flexRadioDefault23=="3")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($stress->flexRadioDefault23=="2")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2" {{($stress->flexRadioDefault23=="1")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($stress->flexRadioDefault23=="0")? "checked" : "disabled"}}></td>
                    </tr>
                </tbody>
            </table>
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
@endpush
@endsection
