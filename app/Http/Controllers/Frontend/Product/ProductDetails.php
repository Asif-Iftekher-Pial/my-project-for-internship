<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetails extends Controller
{
    //
    public function viewproduct($id)
    {
        $product_list=Product::findOrFail($id);
        // // dd($product_list);
        return view('new_frontend.layouts.product_details',compact('product_list'));  //
    }
    public function catagorizedproduct()
    {
        
        $catagorized_list = Product::where('categoryname','Cement')->get();
        
        return view('new_frontend.layouts.catagorized_product',compact('catagorized_list'));  //
    }
}
