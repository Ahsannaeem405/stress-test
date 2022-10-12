@extends('layouts.app')
@section('content')
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
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($live->flexRadioDefault=="constant")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{($live->flexRadioDefault=="frequently")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($live->flexRadioDefault=="sometime")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{($live->flexRadioDefault=="rarely")? "checked" : "disabled"}} ></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($live->flexRadioDefault=="never")? "checked" : "disabled"}} ></td>
                    </tr>
                    <tr>
                        <td>Været anspændt?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" {{($live->flexRadioDefault1=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault22" {{($live->flexRadioDefault1=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5" {{($live->flexRadioDefault1=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault6" {{($live->flexRadioDefault1=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault7" {{($live->flexRadioDefault1=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Været irritabel og oplevet en indre modstand/modvilje?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($live->flexRadioDefault2=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($live->flexRadioDefault2=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft problemer med at slappe af?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($live->flexRadioDefault3=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($live->flexRadioDefault3=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet, at du har flere bekymringer og hele tiden tænker på problemer, selvom du har fri og skal slappe af?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($live->flexRadioDefault4=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($live->flexRadioDefault4=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft besvær med at koncentrere dig?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($live->flexRadioDefault6=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($live->flexRadioDefault6=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Glemt noget, nøgler, en aftale eller et møde?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($live->flexRadioDefault7=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($live->flexRadioDefault7=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft svært ved at vælge og træffe en beslutning?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($live->flexRadioDefault8=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($live->flexRadioDefault8=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet ikke at føle dig i kontrol?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($live->flexRadioDefault9=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2" {{($live->flexRadioDefault9=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($live->flexRadioDefault9=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2" {{($live->flexRadioDefault9=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" {{($live->flexRadioDefault9=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Oplevet ikke at have overskud til at gøre det, du godt vil gøre?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($live->flexRadioDefault10=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2" {{($live->flexRadioDefault10=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($live->flexRadioDefault10=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2" {{($live->flexRadioDefault10=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" {{($live->flexRadioDefault10=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Følt dig trist til mode?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($live->flexRadioDefaul11=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2" {{($live->flexRadioDefault11=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($live->flexRadioDefault11=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2" {{($live->flexRadioDefault11=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" {{($live->flexRadioDefault11=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Følt dig i presset?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($live->flexRadioDefault12=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2" {{($live->flexRadioDefault12=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($live->flexRadioDefault12=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2" {{($live->flexRadioDefault12=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" {{($live->flexRadioDefault12=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft manglende interesse for de ting,  du foretager dig på arbejdet/ i dagligdagen?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($live->flexRadioDefault13=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2" {{($live->flexRadioDefault13=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($live->flexRadioDefault13=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2" {{($live->flexRadioDefault13=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" {{($live->flexRadioDefault13=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft en følelse af, at der er alt for meget, du skal nå på dit arbejde og i din hverdag?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($live->flexRadioDefault14=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2" {{($live->flexRadioDefault14=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($live->flexRadioDefault14=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2" {{($live->flexRadioDefault14=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" {{($live->flexRadioDefault14=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Indtaget mere alkohol og kaffe, te eller medicin end sædvanlig?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($live->flexRadioDefault15=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2" {{($live->flexRadioDefault15=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($live->flexRadioDefault15=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2" {{($live->flexRadioDefault15=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" {{($live->flexRadioDefault15=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>En uro i kroppen?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($live->flexRadioDefault16=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2" {{($live->flexRadioDefault16=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($live->flexRadioDefault16=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2" {{($live->flexRadioDefault16=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" {{($live->flexRadioDefault16=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Uforklarlige smerter i kroppen</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($live->flexRadioDefault17=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2" {{($live->flexRadioDefault17=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($live->flexRadioDefault17=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2" {{($live->flexRadioDefault17=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" {{($live->flexRadioDefault17=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft ondt i eller knugende fornemmelse i maven?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($live->flexRadioDefault18=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2" {{($live->flexRadioDefault18=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($live->flexRadioDefault18=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2" {{($live->flexRadioDefault18=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" {{($live->flexRadioDefault18=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft fordøjelsesproblemer,  diarré eller forstoppelse?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($live->flexRadioDefault19=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2" {{($live->flexRadioDefault19=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($live->flexRadioDefault19=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2" {{($live->flexRadioDefault19=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" {{($live->flexRadioDefault19=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft   midlertidig hjertebanken?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($live->flexRadioDefault20=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2" {{($live->flexRadioDefault20=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($live->flexRadioDefault20=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2" {{($live->flexRadioDefault20=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" {{($live->flexRadioDefault20=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft hovedpine?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($live->flexRadioDefault21=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2" {{($live->flexRadioDefault21=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($live->flexRadioDefault21=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2" {{($live->flexRadioDefault21=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" {{($live->flexRadioDefault21=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Haft udslæt eller eksem?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($live->flexRadioDefault22=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2" {{($live->flexRadioDefault22=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($live->flexRadioDefault22=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2" {{($live->flexRadioDefault22=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" {{($live->flexRadioDefault22=="never")? "checked" : "disabled"}}></td>
                    </tr>
                    <tr>
                        <td>Sovet dårligt og vågner mange gange i løbet af natten?</td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($live->flexRadioDefault23=="constant")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2" {{($live->flexRadioDefault23=="frequently")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($live->flexRadioDefault23=="sometime")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2" {{($live->flexRadioDefault23=="rarely")? "checked" : "disabled"}}></td>
                        <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" {{($live->flexRadioDefault23=="never")? "checked" : "disabled"}}></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
