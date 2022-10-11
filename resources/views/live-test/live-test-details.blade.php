@extends('layouts.app')
@section('content')
<div class="Live_testDetailSec StressDetailSec">
    <div class="container">
        <div class="row">
            <div class="Innerdetail">
                <h2>Livshjuls Test</h2>
                <p class="mb-5 mt-4">Når vi tester din livs-balance, så beder vi dig om at vurdere, hvor tilfreds du er med 8 særlige relationer mellem dig og så det miljø, du er i, eller hvordan du forholder dig til 8 forhold i din omgivelser. Du tilkendegiver din vurdering af hvert et forhold ved at svare/sætte kryds på en skala fra 0 til 10, hvor 10 svarer til, at du er Meget tilfreds og 0, at du er Meget Utilfreds. Resultaterne af dine vurderinger vises til sidst i et Livshjul, som viser din nuværende livsbalance</p>
                <a href="{{route('live-test')}}" class="text-decoration-none btnNext fw-bold">Next</a>
            </div>
        </div>
    </div>
</div>
@endsection
