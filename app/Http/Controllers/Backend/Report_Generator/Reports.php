<?php

namespace App\Http\Controllers\Backend\Report_Generator;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class Reports extends Controller
{
     public function report()
    {
        $salereport=OrderDetail::with('order')->get();
        
        // dd($salereport);
        return view('backend.Reports.Sale',compact('salereport'));
    }
}
