<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewProductController extends Controller
{
    //
    public function product()
    {
        return view('backend.layouts.view_products');
    }
}
