<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ViewEmployeeFormController extends Controller
{
    //
    public function form()
    {
        return view('backend.layouts.admin_panel.view_employees_form');
    }



    function insert(Request $request)
    {

        $data= [



            // 'e_id'=>$request->input('employee_id'),
            'employee_name'=>$request->input('employee_name'),
            'employee_designation'=>$request->input('employee_designation'),
            'employee_address'=>$request->input('employee_address'),
            'contact_information'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'employee_gender'=>$request->input('gender'),
            'password'=>$request->input('password'),

 
                                                     //    structure is =  "database column name"->$request->input('blade files name="name here')

        ];
        User::create($data);
        return redirect()->back();

    }



    public function delete($id){
        User::findOrFail($id)->delete();
        return redirect()->back();
    }


}


