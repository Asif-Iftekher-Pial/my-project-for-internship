<?php

namespace App\Http\Controllers\Backend\Products_panel;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateProductForm extends Controller
{
    //
    public function index()
    {
        $catagories=Catagory::all();
        // dd($catagories);
        return view('backend.layouts.products.create_product_form',compact('catagories'));
    }



    public function create(Request $request)
    {



        $filename='';

        if($request->hasFile('image'))
        {
            
             $file = $request->file('image');

            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   
                $file->storeAs('just_uploaded', $filename);
            }

        } 

        Product::create([

            'productname'=>$request->productname,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            'price'=>$request->price

        ]);

        return redirect()->route('view_product')->with('success', 'Product Added Successfully');;
    }

    public function edit($id)
    {
        $catagories=Catagory::all(); // retriving all data from catagory model to catagories
        $product_list=Product::findOrFail($id);  //retriving all data from product model based on ID 
        return view('backend.layouts.products.update_product_form',compact('product_list','catagories'));
    }

    public function update(Request $request,$id)
    {
        //first collect that specific product by $id
        $product_list=Product::findOrFail($id);
        //then store it's previous image
        $filename=$product_list->image;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('just_uploaded', $filename);
                @unlink(public_path('uploaded_Images/just_uploaded/' . $product_list->image ));
            }
        }
        $product_list->update([
            'productname'=>$request->productname,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            'price'=>$request->price
        ]);
        return redirect()->route('view_product')->with('success', 'Product Updated Successfully');
}
 

    
}
