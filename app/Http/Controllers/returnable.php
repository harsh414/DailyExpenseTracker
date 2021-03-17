<?php


namespace App\Http\Controllers;

use App\Expense;

trait returnable
{

    public function expenses()
    {
        $today_date = date('Y-m-d');
        $yesterday_date = date("Y-m-d", strtotime("-1 days"));
        $today_exp = 0;
        $yesterday_exp = 0;
        $l7days_exp = 0;
        $l30days_exp = 0;
        $curr_yr_exp = 0;
        $total_exp = 0;
        $query_t = Expense::where([
            ['user_id', '=', auth()->user()->id],
            ['date_of_expense', '=', $today_date],
        ])->get();
        foreach ($query_t as $q) {
            $today_exp += $q['cost'];
        }

//        **************************** YESTERDAYS EXP
        $query_y = Expense::where([
            ['user_id', '=', auth()->user()->id],
            ['date_of_expense', '=', $yesterday_date],
        ])->get();
        if (count($query_y)) {
            foreach ($query_y as $q) {
                $yesterday_exp += $q['cost'];
            }
        }


//        ******************************** LAST7DAYSEXP
        $query_l7d = Expense::where([
            ['user_id', '=', auth()->user()->id]
        ])->where('date_of_expense', '>=', date('Y-m-d', strtotime("-7 days")))
            ->get();

        if (count($query_l7d)) {
            foreach ($query_l7d as $q) {
                $l7days_exp += $q['cost'];
            }
        }
//        ***************************************


//        ************************************** LAST30DAYSEXP
        $query_l30d = Expense::where([
            ['user_id', '=', auth()->user()->id]
        ])->where('date_of_expense', '>=', date('Y-m-d', strtotime("-30 days")))
            ->get();

        if (count($query_l30d)) {
            foreach ($query_l30d as $q) {
                $l30days_exp += $q['cost'];
            }
        }
//        *****************************************


        //************************************** CURRENT YR EXP
        $query_cy = Expense::where([
            ['user_id', '=', auth()->user()->id]
        ])->whereYear('date_of_expense', date('Y'))
            ->get();

        if (count($query_cy)) {
            foreach ($query_cy as $q) {
                $curr_yr_exp += $q['cost'];
            }
        }
//        *****************************************


        //**************************************  TOTAL EXPENSE
        $query_tot = Expense::where([
            ['user_id', '=', auth()->user()->id]
        ])->get();

        if (count($query_tot)) {
            foreach ($query_tot as $q) {
                $total_exp += $q['cost'];
            }
        }
//        *****************************************


        return view('expenses')->with([
            'today_exp' => $today_exp,
            'yesterday_exp' => $yesterday_exp,
            'l7days_exp' => $l7days_exp,
            'l30days_exp' => $l30days_exp,
            'curr_yr_exp' => $curr_yr_exp,
            'total_exp'=>$total_exp
        ]);
    }
}
