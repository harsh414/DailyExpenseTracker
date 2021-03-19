<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @media only screen and (max-width: 760px) {
            #back {
                height: 30vh;
            }
        }
    </style>
@yield('linkrel')

<!-- Styles -->

{{--    <link href="{{ asset('css/main.css') }}" rel="stylesheet">--}}
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-sm-12 col-md-4" id="back">
            <img src="{{asset('images/expbg.jpeg')}}" style=" width:100%;height: 100vh" alt="">
        </div>
        <div class="col-sm-12 col-lg-7 col-md-8 text-center" style="background: black;opacity: 0.8">
            <div class="font-weight-bold" style="font-size: 40px;letter-spacing: 2px; font-family: 'cursive';margin-top: 5rem;color: blue">
                <span style="color: white">D</span>ai<span style="color: yellow">ly</span>
                <span style="color: white">E</span>xpen<span style="color: white">se</span>
                <span style="color: yellow">T</span>rac<span style="color: white">ke</span>r
            </div>
            <img src="https://image.flaticon.com/icons/png/128/2942/2942269.png" class="mt-3" style="height: 80px;width: 80px;">
            <div style="color:yellow;margin-top: 3.5rem;font-size: 20px;font-family: 'cursive'" class="text-3xl tracking-wide ml-4">
{{--                <p class="font-weight-bold" style="font-family: 'cursive';font-size: 23px">--}}
                Join Today
{{--                </p>--}}
            </div>

            <div class="ml-4 mt-2 align-items-center">
                <div class="links">
                    @auth
                        <a href="{{ url('/profile') }}"><button class="btn btn-primary w-25 shadow rounded-lg px-4 py-2 my-1 text-white" >Home</button></a>
                    @else
                        <a href="{{ route('register') }}"><button class="btn btn-dark w-25 shadow font-bold rounded-lg px-4 py-2" >Sign Up</button></a>
                        <br><br>
                        <a href="{{ route('login') }}"><button class="btn btn-primary w-25 shadow rounded-lg px-4 py-2 text-white lg:mr-1">Login</button></a>

                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
{{--        <div class="flex-center position-ref full-height">--}}


{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    tweety--}}
{{--                </div>--}}


</body>
</html>
