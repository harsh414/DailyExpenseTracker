@extends('layouts.app')


@section('content')
<div class="container mb-5">
<div class="row mt-4">
    <div class="col-lg-4 col-md-6" style="margin-top: 5rem;">
        <h4 class="text-center font-weight-bold" style="font-family: 'cursive'">Today's Expense</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px darkgoldenrod;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$today_exp}}</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 5rem;">
        <h4 class="text-center">Yesterday's Expense</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px black;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$yesterday_exp}}</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 5rem;">
        <h4 class="text-center">Last 7 Days Expense</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px white;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$l7days_exp}}</p>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 3rem">
    <div class="col-lg-4 col-md-6 mt-sm-5" style="margin-top:5rem;">
        <h4 class="text-center">Last 30 Days Expense</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px white;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$l30days_exp}}</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-sm-5" style="margin-top: 5rem;">
        <h4 class="text-center">Current Year Expenses</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px black;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$curr_yr_exp}}</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-sm-5" style="margin-top: 5rem;">
        <h4 class="text-center">Total Expenses</h4>
        <div class="text-center" style="margin:0 auto;border-radius:100%;height:250px;width:250px;
        border:1px solid white; box-shadow: 5px 4px 9px 3px orangered;">
            <p class="font-weight-bold" style="margin-top: 45%;font-size: 25px">₹ {{$total_exp}}</p>
        </div>
    </div>
</div>
</div>
</div>
@endsection
