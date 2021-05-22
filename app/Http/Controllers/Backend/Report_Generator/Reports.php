<?php

namespace App\Http\Controllers\Backend\Report_Generator;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Reports extends Controller
{
     public function report()
    {
        $salereport=Order::where('status','Delivered')->get();
        // dd($salereport);
        return view('backend.Reports.Sale',compact('salereport'));
    }
}
