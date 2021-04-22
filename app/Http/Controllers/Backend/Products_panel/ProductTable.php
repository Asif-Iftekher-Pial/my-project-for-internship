<?php

namespace App\Http\Controllers\Backend\Products_panel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductTable extends Controller
{
    //
    public function index()
    {

        $product_list=Product::paginate(5); 
        return view('backend.layouts.products.product_list_table',compact('product_list'));
    }

    public function delete($id){
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('success','Product deleted Successfully');
    }
}
