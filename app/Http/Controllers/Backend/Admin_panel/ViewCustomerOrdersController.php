<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\C_order;
use Illuminate\Http\Request;

class ViewCustomerOrdersController extends Controller
{
    //
    public function customerOrder()
    {
        return view('backend.layouts.admin_panel.view_customers_order');
    }





    public function insert(Request $request)
    {

        //insert into c_orders table


    }





}
