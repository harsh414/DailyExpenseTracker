<?php

namespace App\Http\Controllers;

use App\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    use returnable;    //consist of all expenses of dashboard

    public function addexpense()
    {
        return view('addexpense');
    }

    public function manageExpense()
    {
        $user= auth()->user();
        $expense= $user->expenses;
        return view('manageExpense')->with([
            'expense'=>$expense,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'itemname'=>'required',
            'cost'=>'required',
            'date'=>'required'
        ]);

        $date= $request->input('date');
        $name= $request->input('itemname');
        $cost= $request->input('cost');


        $expense = new expense;
        $expense->user_id= auth()->user()->id;
        $expense->date_of_expense= $date;
        $expense->item_name= $name;
        $expense->cost= $cost;
        if($expense->save()){
            return redirect()->route('manageExpense')->with('success','New Expense saved');
        }else{
            return back()->with('success','Something Went Wrong');
        }
    }

    public function destroy($id)
    {
       $expense =  Expense::find($id);
       $expense->delete();
       return back();
    }
}
