<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\C_forms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewCustomerFormController extends Controller
{
    //
     public function customerForm()
    {
        $customer_list=User::all();
        return view('backend.layouts.admin_panel.view_customers_table',compact('customer_list'));
    }
    

}
