<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\C_forms;
use Illuminate\Http\Request;

class ViewCustomerFormController extends Controller
{
    //
     public function customerForm()
    {
        return view('backend.layouts.admin_panel.view_customers_form');
    }



    public function create(Request $request)
    {



        C_forms::create([


            // 'c_id'=>$request->c_id,
            'customer_name'=>$request->customer_name,
            'customer_address'=>$request->customer_address,
            'customer_contact'=>$request->contact,	
            'customer_mail'=>$request->email,
            'customer_gender'=>$request->gender,
            'customer_password'=>$request->password

        ]);

        return redirect()->back();


    }

    
    public function delete($id){
        C_forms::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function edit($id)  
    {
        $customer_data=C_forms::findOrFail($id);

        return view('backend.layouts.admin_panel.view_customers_table',compact('customer_data'));
    }
    
    public function update(Request $request, $id){
        C_forms::findOrFail($id)->update([
            'customer_name'=>$request->customer_name,
            'customer_address'=>$request->customer_address,
            'customer_contact'=>$request->contact,
            'customer_mail'=>$request->email,
            'customer_gender'=>$request->gender,
            'customer_password'=>$request->password
        ]);

        return redirect()->route('student.list')->with('update', 'Updated Successfully');
    }

    






}
