<?php

namespace App\Http\Controllers\Frontend\OrderandCart;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\OrderConfirmation;
use Exception;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class OrderController extends Controller
{
    // 
    public function addToCart($id)
    {
        $product_list = Product::findOrFail($id);
        // dd($product_list);
        Cart::add([
            'id' => $id,
            'name' => $product_list->productname,
            'qty' => 1,
            'price' => $product_list->price,
            'weight' => 0,
            'options' => ['image' => $product_list->image, 'description' => $product_list->description,]
        ]);
        // dd(Cart::content()); //see if all the carted product is in content or not 
        return redirect()->back()->with('success', 'Product Added to Cart Successfully');
    }

    public function viewCart()
    {
        $carted_Products = Cart::content();


        return view('new_frontend.layouts.viewCart', compact('carted_Products'));
    }
    public function removecartitem($rowId)
    {
        // dd($rowId);
        Cart::remove($rowId);
        return redirect()->back()->with('success', 'Product remove from Cart Successfully');
    }
    public function cartupdate(Request $request, $rowId)
    {
        Cart::update($rowId, $request->input('quantity'));
        return redirect()->back()->with('success', 'Product quantity update Successfully');
    }
    public function clearcart()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Cart Cleared Successfully');
    }
    public function orderform()
    {
        $carts = Cart::content();
        return view('new_frontend.layouts.checkout', compact('carts'));
    }

    public function ordered_product(Request $request)
    {
        $carts = Cart::content();

        $total = Cart::subtotal();
        DB::beginTransaction();
        try {
            $ordered_data = Order::create([
                'customer_id' => auth()->user()->id,
                'price' => $total,
                'country' => $request->country,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zip_code,
                'phone_number' => $request->phone_number,
                'email' => auth()->user()->email,
                'CreditCardType' => $request->CreditCardType,
                'card_number' => $request->card_number,
            ]);
            foreach ($carts as $data) {
                $orderdetailsinfo=OrderDetail::create([
                    'order_id' => $ordered_data->id,
                    'customer_id' => $ordered_data->customer_id,
                    'product_name' => $data->name,
                    'image' => $data->options->image,
                    'qty' => $data->qty,
                    'price' => $data->price
                ]);
            }
            DB::commit();
            Cart::destroy();


            //User Mail system will be here 

            Mail::to(auth()->user()->email)->send(new OrderConfirmation($orderdetailsinfo));



            return redirect()->route('orderform')->with('success', 'Order Has been placed successfully');
        }catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    public function myorders()
    {
        $myorders=OrderDetail::where('customer_id','=',auth()->user()->id)->with('order')->get();
        
        return view('new_frontend.layouts.my_orders',compact('myorders'));
    }
}
