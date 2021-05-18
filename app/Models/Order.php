<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected  $guarded = [];

    public function myorder()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');  //orderdetail_id is from order table column and id is from orderdetail table 
    }

    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }
}
