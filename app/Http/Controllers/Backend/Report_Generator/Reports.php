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
        $salereport = [];
        $fromDate='';
        $toDate='';

        if($_GET)
        {
            if ($_GET['from_date']!='' && $_GET['to_date']!='')
        
            {
                $fromDate = date('y-m-d',strtotime($_GET['from_date']));
                $toDate = date('y-m-d',strtotime($_GET['to_date']));
    
                $salereport = OrderDetail::whereBetween('created_at',[$fromDate,$toDate])->with('order')->paginate(7)
                ->appends(['from_date'=>$fromDate,'to_date'=>$toDate]);
    
            }
        }
       
        return view('backend.Reports.Sale', compact('salereport','fromDate','toDate'));
    }
}
