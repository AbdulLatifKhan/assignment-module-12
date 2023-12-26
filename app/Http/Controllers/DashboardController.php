<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home(){
        $today = date("Y/m/d");
        $yesterday = date("Y/m/d", strtotime("-1 day"));
        $month = date("m");
        $year = date("Y");
        


        $todaySaleAmount = DB::table('sales')
                ->whereDate('created_at', $today)
                ->sum('total_price');

        $yesterdaySaleAmount = DB::table('sales')
                ->whereDate('created_at', $yesterday)
                ->sum('total_price');

        $thisMonthSaleAmount = DB::table('sales')
                ->whereMonth('created_at', $month)
                ->sum('total_price');
        $thisYearSaleAmount = DB::table('sales')
                ->whereYear('created_at', $year)
                ->sum('total_price');



        // $thisMonthSaleAmount = DB::table('sales')
        //         ->whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])
        //         ->sum('total_price');

        // $thisYearSaleAmount = DB::table('sales')
        //         ->whereBetween('created_at', [$firstDayOfYear, $lastDayOfYear])
        //         ->sum('total_price');
      
        return view('pages.home',['todaySaleAmount' => $todaySaleAmount, 'yesterdaySaleAmount' => $yesterdaySaleAmount, 'thisMonthSaleAmount' => $thisMonthSaleAmount, 'thisYearSaleAmount' => $thisYearSaleAmount]);

        
    }
   
}
