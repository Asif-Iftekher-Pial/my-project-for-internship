<?php

namespace App\Providers;

use App\Models\Product;

use App\Models\Catagory;
use App\Models\Eforms;
use App\Models\Order;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $catagorylist=Catagory::all();
        View::share('catagorylist',$catagorylist);

        $product_list=Product::all();
        View::share('product_list',$product_list);

        $cart_content=Cart::content();
        View::share('cart_content',$cart_content);

        $total_customer=User::count();
        View::share('total_customer',$total_customer);

        $total_products=Product::count();
        View::share('total_products',$total_products);

        $total_employee=Eforms::count();
        View::share('total_employee',$total_employee);
        
        $total_orders=Order::count();
        View::share('total_orders',$total_orders);


    }
}
