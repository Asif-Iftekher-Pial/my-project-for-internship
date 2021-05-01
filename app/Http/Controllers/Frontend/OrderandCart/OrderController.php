<?php

namespace App\Http\Controllers\Frontend\OrderandCart;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;

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
    public function removecartitem()
    // {
    //     $carted_Products = Cart::content();
    //     $rowId = $carted_Products->id;

    //     Cart::remove($rowId);
    }
}
