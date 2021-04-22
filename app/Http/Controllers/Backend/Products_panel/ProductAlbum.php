<?php

namespace App\Http\Controllers\Backend\Products_panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAlbum extends Controller
{
    //
    public function index()
    {
        return view('backend.layouts.products.products_album');
    }
}
