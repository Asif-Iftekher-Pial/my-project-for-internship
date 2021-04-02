<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\C_forms;
use Illuminate\Http\Request;

class ViewCustomerController extends Controller
{
    //
    public function customer()
    {
        $customer_info_list=C_forms::all();   //select all from the model C_forms or C_froms table from database

        return view('backend.layouts.admin_panel.view_customers_table' , compact('customer_info_list'));
    }






    
}
