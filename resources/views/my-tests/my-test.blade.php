@extends('layouts.app')
@section('content')
<div class="StressTestSec">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Livshjuls Test</h2>
            <p class="text-center mb-5 mt-3">Hvor tilfreds er du med:</p>
            <table cellspacing="0" cellpadding="0" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lives as $live)
                    <tr>
                        <td style="text-align: center">Live Test</td>
                        <td>{{$live->created_at->format('d-m-Y')}}</td>
                        {{-- <td><input type="date" value="{{$live->created_at->format('Y-m-d')}}" readonly/></td> --}}
                        <td><a href="{{route('my-live-test-review',$live->id)}}" class="btnNext text-decoration-none fw-bold">Review</a></td>
                    </tr>
                    @endforeach
                    @foreach($stresses as $stress)
                    <tr>
                        <td style="text-align: center">Stress Test</td>
                        <td>{{$stress->created_at->format('d-m-Y')}}</td>
                        {{-- <td><input type="date" value="{{$live->created_at->format('Y-m-d')}}" readonly/></td> --}}
                        <td><a href="{{route('my-stress-test-review',$stress->id)}}" class="btnNext text-decoration-none fw-bold">Review</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection