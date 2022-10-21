<!doctype html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/lightslider.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <title>Stress Test</title>
    {{-- toastr css --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

</head>
<body>
<div class="Main">
    <div class="InnerMain">
        <div class="header">
            <div class="container p-0 ">
                <nav class="navbar navbar-expand-lg navbar-light p-2">
                    <a class="navbar-brand logo" href="{{route('home')}}">
                        <img src="{{asset('assets/images/arb-logo.png')}}" alt="Logo" height="100" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav">
                            @if(!Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>
                            <li class="nav-item AdminIcon">
                                <a class="nav-link loginBtn rounded" href="{{route('login')}}">Login</a>
                            </li>
                            @endif
                            @if(Auth::user())
                            <li class="nav-item AdminIcon">
                                <a class="nav-link loginBtn rounded" href="{{route('stress-test')}}">Arbejdsstress Test</a>
                            </li>
                            <li class="nav-item AdminIcon">
                                <a class="nav-link loginBtn rounded" href="{{route('life-test')}}">Livshjuls Test</a>
                            </li>
                            <li class="nav-item AdminIcon">
                                <a class="nav-link loginBtn rounded" href="{{route('my-test')}}">Mine prøver</a>
                            </li>
                            <li class="nav-item AdminIcon">
                                <a class="nav-link loginBtn rounded" href="{{route('logout')}}">Log ud</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
