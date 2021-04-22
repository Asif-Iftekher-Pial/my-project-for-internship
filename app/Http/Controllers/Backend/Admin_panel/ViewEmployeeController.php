<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\Eforms;
use Illuminate\Http\Request;

class ViewEmployeeController extends Controller
{
    //
    public function employee()
    { 
        return view('backend.layouts.admin_panel.view_employees_table',
        
       ['users'=> Eforms::paginate(5)]);
         
        
        //  here users is variable and Eforms is model that retrive all data 
    }
}
