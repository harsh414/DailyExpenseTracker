@extends('layouts.app')
@section('content')
<div class="container" style="height: 100vh;margin-top: 10%">
    <h1 class="text-center mt-5" style="font-family: 'cursive'">Manage Expenses</h1>
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
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
