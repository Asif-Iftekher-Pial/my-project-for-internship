<?php

namespace App\Http\Controllers\Backend\CouponController;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function add()
    {
        return view('backend.layouts.coupon.coupon');
    }



    public function create(Request $request)
    {
       Coupon::create([
            'coupon_code'=>$request->coupon_code,
            'discount'=>$request->discount
         ]);
         // insert into categories(name,description) values($request->name,$request->description);
 
         return redirect()->back();

    }
}
