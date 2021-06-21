<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getproduct()
    {
       
        // return $data;
        try{
            $products=Product::all();
           return $this->success($products,'Product List');


        }catch(Exception $e){
          
           return $this->failed('Something went wrong');

        }

    }
    public function singleproduct($id)
    {
       
        // return $data;
        try{
            $products=Product::find($id);
           return $this->success($products,'Product List');


        }catch(Exception $e){
           
            
           return $this->failed('Something went wrong');


        }

    }
    public function createproduct(Request $request)
    {
        try{
            
            $request->validate([
                
            'productname'=>'string',
            'category_id'=>'integer',
            'description'=>'string',
            'quantity'=>'integer',
            'price'=>'integer'
            ]);
        $filename='';

        if($request->hasFile('image'))
        {
            
             $file = $request->file('image');

            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   
                $file->storeAs('just_uploaded', $filename);
            }

        } 

       $createProduct=Product::create([

            'productname'=>$request->productname,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            'price'=>$request->price

        ]);

        return $this->success($createProduct,'product created successfully');

        }catch(Exception $e){
            return $this->failed($e->getMessage());
        }
    }
    
}
