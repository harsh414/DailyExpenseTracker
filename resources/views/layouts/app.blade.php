<!doctype html>
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
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        .container {
            max-width: 960px;
        }
        .navbar-survival101 {
            background-color:black;
        }


        .navbar-survival101 .navbar-brand img {
            vertical-align: baseline;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            color: #fff;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .7rem;
                padding-left: .7rem;
            }

        }
        @yield('css')
    </style>
</head>
<body class="" style="background: url('images/background.jpg') no-repeat; background-size: cover">
<nav class="navbar navbar-expand-lg navbar-dark navbar-survival101">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://lh3.googleusercontent.com/-ZAS0BBE8Sm0/WaFOdATxW9I/AAAAAAAAAf4/8FfuKoWw6n0cvynAv7Fv2sdYESliQEm4wCL0BGAYYCw/h18/2017-08-26.png" alt="L A N T E R N">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('expense')}}">DASHBOARD<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('addExpense')}}">Add Expense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('manageExpense')}}">Manage Expense</a>
                </li>
            </ul>
            <ul class="justify-content-center" id="unol" style="margin:0;">
                <img src="https://as1.ftcdn.net/jpg/01/05/29/62/500_F_105296263_MX030meFkK57Jj7z4TaSZXw1T0KPQXmd.jpg" style="height: 25px;width: 25px">
            </ul>

        </div>
    </div>
</nav>
<div>
    @yield('content')
</div>


</body>
</html>
<script>
    $(function($){ // wait until the DOM is ready
        $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
    });

    setInterval(function (){
        $("#success").fadeOut();
    },1000);
</script>

