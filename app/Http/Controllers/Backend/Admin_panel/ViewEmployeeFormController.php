<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use App\Models\Eforms;
use Illuminate\Http\Request;



class ViewEmployeeFormController extends Controller
{
    //
    public function form()
    {
        return view('backend.layouts.admin_panel.view_employees_form');
    }



    function insert(Request $request)
    {
        // dd($request->all());
        
        $filename='';

        if($request->hasFile('image'))
        {
            
             $file = $request->file('image');

            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   
                $file->storeAs('employee_image', $filename);
            }

        } 


        $data= [
            // 'e_id'=>$request->input('employee_id'),
            'employee_name'=>$request->input('employee_name'),
            'employee_designation'=>$request->input('employee_designation'),
            'employee_address'=>$request->input('employee_address'),
            'contact_information'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'qualification'=>$request->input('qualification'),
            'paddress'=>$request->input('paddress'),
            'employee_gender'=>$request->input('gender'),
            'age'=>$request->input('age'),
            'password'=>$request->input('password'),
            'image'=>$filename,

 
            //    structure is =  "database column name"->$request->input('blade files name="name here')

        ];
        Eforms::create($data);
        return redirect()->Route('employee')->with('success','Employee added successfully');

    }



    public function delete($id){
        Eforms::findOrFail($id)->delete();
        return redirect()->Route('employee')->with('success','Employee Deleted successfully');
    }



    public function edit($id)
    {

        $employee_list=Eforms::findOrFail($id);
        return view('backend.layouts.admin_panel.employee_update',compact('employee_list'));

    }

    public function update(Request $request,$id)
    {

        //first collect that specific image by $id
        $employee_list=Eforms::findOrFail($id);
        //then store it's previous image
        $filename=$employee_list->image;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('employee_image', $filename);
            }
        }
        $employee_list=Eforms::findOrFail($id)->update([

            'employee_name'=>$request->employee_name,
            'employee_designation'=>$request->employee_designation,
            'employee_address'=>$request->employee_address,
            'contact_information'=>$request->contact,
            'email'=>$request->email,
            'qualification'=>$request->qualification,
            'paddress'=>$request->paddress,
            'age'=>$request->age,
            'employee_gender'=>$request->gender,
            'password'=>$request->password,
            'image'=>$filename,



        ]);

        return redirect()->route('employee')->with('update', 'Updated Successfully');
    }

    public function employeeview($id)
    {
        $employee_list=Eforms::findOrFail($id);
        return view('backend.layouts.admin_panel.view_employee_profile',compact('employee_list'));
    }
}


