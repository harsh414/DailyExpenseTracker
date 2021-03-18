@extends('layouts.app')
@section('content')
<div class="container" style="height: 100vh;margin-top: 10%">
    <div class="text-center btn-primary text-lg-center" id="success" style="color: black">
        @if(session()->has('success'))
            {{session('success')}}
        @endif
    </div>
    <button class="btn btn-primary float-left">
        <a href="{{route('addExpense')}}" class="text-white" style="text-decoration: none;font-family: cursive">
            Add New <img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Plus_01-66-128.png" style="height:24px;width:24px;color: white">
        </a>
    </button>
    <h1 class="text-center mt-5 font-weight-bold" style="font-family: 'cursive'">Manage Expenses</h1>
    <table class="table table-dark mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Expense name</th>
            <th scope="col">Date of Expense</th>
            <th scope="col">Expense Amount</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach($expense as $e)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$e->item_name}}</td>
            <td>{{$e->date_of_expense}}</td>
            <td>{{$e->cost}}</td>
            <td>
                <form method="post" action="manageExpense/{{$e->id}}">
                    {{@csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" id="hoverable" class="btn btn-primary">delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
