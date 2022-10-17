@extends('layouts.app')
@section('content')
<div class="StressDetailSec">
    <div class="container">
        <div class="row">
            <div class="Innerdetail">
                <h2>Arbejdsstress Pro</h2>
                <p class="mb-5 mt-4">Der findes flere måder at teste din egentlige stresstilstand på. Vi benytter en udvidet Perceived Stress Scale (PSS), som undersøger, hvordan du oplever 
                    din stress, hvordan den påvirker din mentale tilstand og hvordan den påvirker din adfærd og din krop – afspejler sig som psykosomatiske symptomer. 
                    Derfor indgår der i den test, som vi bruger, også spørgsmål vedrørende din fysiske og psykiske tilstand.
                     Nedenfor kan du teste din egen tilstand. Du skal svare på spørgsmålene ved at sætte kryds i en af de 5 svarkategorier fra 0 til 4, hvor 0 er lavest og skal 
                    forstås som ALDRIG, og 4 er højest og skal forstås som KONSTANT. 
                    Det er vigtigt at gøre opmærksom på, at du IKKE alene ud fra dit testresultat kan konkludere, at du er stresset. Det er nødvendigt, at du også sammen 
                    med en eksamineret stresscoach får gennemgået dine resultater og I sammen når frem til en endelig konklusion..</p>
                <a href="{{route('stress-test')}}" class="text-decoration-none btnNext fw-bold">Next</a>
            </div>
        </div>
    </div>
</div>
@endsection
