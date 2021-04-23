<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected  $guarded=[];
    public function productCatagory()
    {
        return $this->belongsTo(Catagory::class,'category_id','id');  //category_id is from product table column and id is from catagory table 
    }

}
