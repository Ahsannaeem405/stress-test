@extends('layouts.app')

@section('content')
<div class="TestCardSec">
    <div class="container">
        <div class="marquee">
            <div class="track">
                <div class="content">&nbsp;Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence</div>
            </div>
        </div>
        <div class="InnerBox text-center">
            <div class="col">
                <img src="{{asset('assets/images/brain.png')}}" />
                <h3>Arbejdsstress Test</h3>
                <div class="HoverBtn d-none">
                    @if(Auth::user())
                    <a href="{{route('stress-test-details')}}" class="text-decoration-none btnNext">Next</a>
                    @else
                    <a href="{{route('login')}}" class="text-decoration-none btnNext">Next</a>
                    @endif
                </div>
            </div>
            <div class="col">
                <img src="{{asset('assets/images/test.png')}}" />
                <h3>Livshjuls Test</h3>
                <div class="HoverBtn d-none">
                    @if(Auth::user())
                    <a href="{{route('live-test-details')}}" class="text-decoration-none btnNext">Next</a>
                    @else
                    <a href="{{route('login')}}" class="text-decoration-none btnNext">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
