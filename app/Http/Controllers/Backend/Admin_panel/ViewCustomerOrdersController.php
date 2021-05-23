<?php

namespace App\Http\Controllers\Backend\Admin_panel;

use App\Models\C_order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class ViewCustomerOrdersController extends Controller
{
    //
    public function customerOrder()
    {
        $view_customer_orders=Order::get();
        
        $total = Cart::subtotal();
        // dd($view_customer_orders);
        return view('backend.layouts.admin_panel.view_customers_order',compact('view_customer_orders','total'));
    }
    public function ordersdetails($id)
    {
        $products=Order::with('myorder')->find($id);
        $total = Cart::subtotal();

        return view('backend.layouts.admin_panel.orderDetails',compact('products','total'));
    }
    public function statusupdate($id,$status)
    {
        $order=Order::find($id);
       
        $order->update(['status'=>$status]);
        return redirect()->back()->with('success','Delivery status updated successfully');;
    }

}
