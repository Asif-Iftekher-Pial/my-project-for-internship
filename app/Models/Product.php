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
        return $this->belongsTo(Catagory::class,'categoryname','catagorytype');  //categoryname is from create product table column and catagorytype is from catagory table 
    }

}
