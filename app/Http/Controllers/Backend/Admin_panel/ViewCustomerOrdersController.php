<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Models\C_order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class ViewCustomerOrdersController extends Controller
{
    //
    public function customerOrder()
    {
        $view_customer_orders=OrderDetail::all();
        $total = Cart::subtotal();
        // dd($view_customer_orders);
        return view('backend.layouts.admin_panel.view_customers_order',compact('view_customer_orders','total'));
    }

}
