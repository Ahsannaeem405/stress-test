@extends('layouts.app')

@section('content')
<div class="TestCardSec">
    <div class="container">
        {{-- <div class="marquee">
            <div class="track">
                <div class="content">&nbsp;Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence Infinite Marquee with long sentence</div>
            </div>
        </div> --}}
        <div class="InnerBox text-center" style="display: flex;">
            <a href="{{route('stress-test-details')}}" style="text-decoration: none;">
                <div class="col">
                    <img src="{{asset('assets/images/50000.png')}}" />
                    <h3>Arbejdsstress Test</h3>
                    <div class="HoverBtn d-none">
                        @if(Auth::user())
                        <a href="{{route('stress-test-details')}}" class="text-decoration-none d-block btnNext">Next
                        @else
                        <a href="{{route('login')}}" class="text-decoration-none d-block btnNext">Next</a>
                        @endif
                    </div>
                </div>
            </a>
            <div class="col">
                <img src="{{asset('assets/images/live-test.png')}}" />
                <h3>Livshjuls Test</h3>
                <div class="HoverBtn d-none">
                    @if(Auth::user())
                    <a href="{{route('life-test-details')}}" class="text-decoration-none d-block btnNext">Next</a>
                    @else
                    <a href="{{route('login')}}" class="text-decoration-none d-block btnNext">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
