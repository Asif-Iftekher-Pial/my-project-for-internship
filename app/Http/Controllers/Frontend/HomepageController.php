<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function homepage()
    {
        $product_list=Product::all();
        return view('new_frontend.layouts.homepageAlbum',compact('product_list',));
    }
}
