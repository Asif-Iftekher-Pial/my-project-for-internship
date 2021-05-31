<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Models\User;
use App\Models\Eforms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {   
        //dd('ok');
        $users = auth()->user();
        //dd($users);
        $employees = $users->employeeProfile;
        //dd($employees);
        return view('backend.layouts.admin_panel.adminProfile',compact('users','employees'));
    }
    public function passwordupdate(Request $request)
    {
        
        if (!Hash::check($request->input('OldPassword'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'Current Password does not match.');
        }


        $request->validate([
            'OldPassword' => 'required',
            'NewPassword' => 'required|min:6',
            'NewPasswordConfirm' => 'required|same:NewPassword'

        ]);


        if (Hash::check($request->input('NewPassword'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'New password can not be the old password.');
        }

        
        $users = User::find(auth()->user()->id);
        // dd($users);
        $users->update([
            'password' => bcrypt($request->NewPassword)
        ]);

        // $users->password = $request->bcrypt($request->password);
        // $users->save();
        return redirect()->back()->with('success', 'Password updated successfully.');

    }


    public function profileedit()
    {
        $selectprofile=auth()->user();
        $data=$selectprofile->employeeProfile;
        //dd($data);

        return view('backend.layouts.admin_panel.employeeEdit',compact('data'));
    }


    
    public function update(Request $request)
    {

        $selectprofile=auth()->user();
        $data=$selectprofile->employeeProfile; //retrive auth employee information
        //dd($data);


        //first collect that specific image by $id
        // $employee_list=Eforms::findOrFail($id);
        //then store it's previous image
        $filename=$data->image;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('employee_image', $filename);
                @unlink(public_path('uploaded_Images/employee_image/' . $data->image ));
            }
        }
        $data->update([
            'employee_address'=>$request->employee_address,
            'contact_information'=>$request->contact_information,
            'qualification'=>$request->qualification,
            'paddress'=>$request->paddress,
            'age'=>$request->age,
            'employee_gender'=>$request->gender,
            'image'=>$filename,
        ]);

        return redirect()->route('profile')->with('success', 'Updated Successfully');
    }
}
