<?php

namespace App\Http\Controllers\Backend\Catagory;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class ProductCatagory extends Controller
{
    //
    public function index()
    {
        $catagory_list=Catagory::all(); //retreave data from database 
       
        return view('backend.layouts.catagory_list.products_catagories',compact('catagory_list'));
    }
    public function create(Request $request)
    {
        
//        dd($request->all());
        //insert into categories table
        Catagory::create([
            // 'catagoryid'=>$request->catagoryid,
            'catagoryname'=>$request->catagoryname,
            'description'=>$request->description
         ]);
         // insert into categories(name,description) values($request->name,$request->description);
 
         return redirect()->back();
    }
}
