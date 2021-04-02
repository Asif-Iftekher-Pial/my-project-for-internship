<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ViewEmployeeController extends Controller
{
    //
    public function employee()
    { 
        return view('backend.layouts.admin_panel.view_employees_table',
        
        ['users'=> User::all()]);   
        
        //  here users is variable and User is model that retrive all data 
    }
}
