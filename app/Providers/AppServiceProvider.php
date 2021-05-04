<?php

namespace App\Providers;

use App\Models\Product;

use App\Models\Catagory;
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

    }
}
