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

        /*.container {*/
        /*    max-width: 960px;*/
        /*}*/
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
    </style>
</head>
<body class="" style="background: url('images/bg2.jpg') no-repeat; background-size: cover">
<nav class="navbar navbar-expand-lg navbar-dark navbar-survival101">
    <div class="container">

        <h4 class="text-white font-weight-bold">Daily Expense Tracker</h4> &nbsp;&nbsp;
        <a class="navbar-brand font-weight-bold" style="font-family: cursive">
{{--           Daily Expense Tracker--}}
            <img src="https://image.flaticon.com/icons/png/128/3200/3200925.png" style="height: 35px; width: 50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="navb">
                    <a class="nav-link" href="{{route('expense')}}">DASHBOARD<span class="sr-only">(current)</span></a>
                </li>
                <hr>
                <li class="nav-item" id="navb">
                    <a class="nav-link" href="{{route('addExpense')}}">Add Expense</a>
                </li>
                <hr>
                <li class="nav-item" id="navb">
                    <a class="nav-link" href="{{route('manageExpense')}}">Manage Expense</a>
                </li>
                <hr>
            </ul>
            @if(auth()->user())
            <ul id="unol" style="margin:0;list-style-type: none;padding-left: 0px">
                <li class="nav-item text-white float-left">
                    <a href="{{route('profile')}}" class="text-white" style="text-decoration: none">
                    {{auth()->user()->name}} &nbsp;<img src="{{auth()->user()->profileurl}}" class="rounded-circle" style="height: 40px;width: 40px;">
                    </a>
                </li>
            </ul>
            @endif

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

    setInterval(function (){
        $("#message").fadeOut();
    },2000);





    $("#hoverable").hover(function(){
        $(this).removeClass("btn-primary");
        $(this).addClass("btn-danger");

    }, function(){
        $(this).removeClass("btn-danger");
        $(this).addClass("btn-primary");
    });

    $('input[type="file"]').change(function(e) {
        var geekss = e.target.files[0].name;
            $("h6").text(geekss);
    });

    $("#saveProfile").click(function (e){
        $name = $('input[type="file"]').val();
        if(!$name){
            alert("Please Select a File");
        }else{
            $("#myform").submit();
        }
    })
</script>

