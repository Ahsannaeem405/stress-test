@extends('layouts.app')
@section('content')
<div class="StressTestSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Livshjuls Test</h2>
                <p class="text-center mb-5 mt-3">Hvor tilfreds er du med:</p>
                <table cellspacing="0" cellpadding="0" class="table">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lifes as $life)
                        <tr>
                            <td style="text-align: center">life Test</td>
                            <td>{{$life->created_at->format('d-m-Y')}}</td>
                            {{-- <td><input type="date" value="{{$life->created_at->format('Y-m-d')}}" readonly/></td> --}}
                            <td><a href="{{route('my-life-test-review',$life->id)}}" class="btnNext text-decoration-none fw-bold">Review</a></td>
                        </tr>
                        @endforeach
                        @foreach($stresses as $stress)
                        <tr>
                            <td style="text-align: center">Stress Test</td>
                            <td>{{$stress->created_at->format('d-m-Y')}}</td>
                            {{-- <td><input type="date" value="{{$life->created_at->format('Y-m-d')}}" readonly/></td> --}}
                            <td><a href="{{route('my-stress-test-review',$stress->id)}}" class="btnNext text-decoration-none fw-bold">Review</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection