@extends('layouts.app')
@section('content')
    <div class="container" style="height: 100vh;margin-top: 10%">
        <div class="text-center btn-primary text-lg-center" id="success" style="color: black">
            @if(session()->has('success'))
                {{session('success')}}
            @endif
        </div>
        <h1 class="text-center mt-5 font-weight-bold" style="font-family: 'cursive'">Add New Expense</h1>
        <form action="addExpense" method="post">
            {{@csrf_field()}}
            <div class="form-group">
                <label for="date" style="font-family: 'cursive'" >Date Of Expense</label>
                <input type="" autocomplete="off" class="form-control" id="datepicker" name="date" value="" placeholder="click here to select date">
            </div>
            <div class="form-group">
                <label for="name" style="font-family: 'cursive'">Expense Name</label>
                <input type="text" autocomplete="off" class="form-control" id="itemname" name="itemname" placeholder="Enter Expense name">
            </div>
            <div class="form-group">
                <label for="cost" style="font-family: 'cursive'">Expense Amount (in Rs)</label>
                <input type="text" autocomplete="off" class="form-control" id="cost" name="cost" placeholder="Enter Amount">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script type="text/javascript">

    </script>
@endsection

