<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductDetails extends Controller
{
    //
    public function viewproduct($id)
    {

        $product_list=Product::findOrFail($id);
        // // dd($product_list);
        return view('new_frontend.layouts.product_details',compact('product_list',));  //
    }
    
    public function catagorizedproduct($id)
    {
        // dd($id);
        $catagorizedProduct=Product::where('category_id',$id)->get(); //select all from product table where categoryname = $id
        // dd($catagorizedProduct);
        return view('new_frontend.layouts.catagorized_product',compact('catagorizedProduct'));  //
    }
}
