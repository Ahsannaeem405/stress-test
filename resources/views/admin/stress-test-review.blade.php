@extends('admin.layouts.app')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Live Test List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Live Test List
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{($live->flexRadioDefault=="raely")? "checked" : "disabled"}} ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{($live->flexRadioDefault=="never")? "checked" : "disabled"}} ></td>
                </tr>
                <tr>
                    <td>Været anspændt?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" {{($live->flexRadioDefault1=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault22" {{($live->flexRadioDefault1=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5" {{($live->flexRadioDefault1=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault6" {{($live->flexRadioDefault1=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault7" {{($live->flexRadioDefault1=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Været irritabel og oplevet en indre modstand/modvilje?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($live->flexRadioDefault2=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" {{($live->flexRadioDefault2=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" {{($live->flexRadioDefault2=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Haft problemer med at slappe af?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($live->flexRadioDefault3=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" {{($live->flexRadioDefault3=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1" {{($live->flexRadioDefault3=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Oplevet, at du har flere bekymringer og hele tiden tænker på problemer, selvom du har fri og skal slappe af?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($live->flexRadioDefault4=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" {{($live->flexRadioDefault4=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1" {{($live->flexRadioDefault4=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Haft besvær med at koncentrere dig?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($live->flexRadioDefault6=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault2" {{($live->flexRadioDefault6=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1" {{($live->flexRadioDefault6=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Glemt noget, nøgler, en aftale eller et møde?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($live->flexRadioDefault7=="frequently")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="sometime")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault2" {{($live->flexRadioDefault7=="raely")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1" {{($live->flexRadioDefault7=="never")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Haft svært ved at vælge og træffe en beslutning?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault2" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1" {{($live->flexRadioDefault8=="constant")? "checked" : "disabled"}}></td>
                </tr>
                <tr>
                    <td>Oplevet ikke at føle dig i kontrol?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Oplevet ikke at have overskud til at gøre det, du godt vil gøre?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Følt dig trist til mode?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Følt dig i presset?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft manglende interesse for de ting,  du foretager dig på arbejdet/ i dagligdagen?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft en følelse af, at der er alt for meget, du skal nå på dit arbejde og i din hverdag?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Indtaget mere alkohol og kaffe, te eller medicin end sædvanlig?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>En uro i kroppen?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Uforklarlige smerter i kroppen</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft ondt i eller knugende fornemmelse i maven?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft fordøjelsesproblemer,  diarré eller forstoppelse?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft   midlertidig hjertebanken?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault20" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft hovedpine?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault21" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Haft udslæt eller eksem?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault22" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Sovet dårligt og vågner mange gange i løbet af natten?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault23" id="flexRadioDefault1"></td>
                </tr>
                <tr>
                    <td>Ændret dine spisevaner og spist mere usundt?</td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1" ></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault2"></td>
                    <td><input class="form-check-input" type="radio" name="flexRadioDefault24" id="flexRadioDefault1"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- END: Content-->
@push('sweet-alert-script')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
        });
    });
</script>
@endpush
@endsection
