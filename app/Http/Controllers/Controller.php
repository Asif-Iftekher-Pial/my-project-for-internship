<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($data,$message)
    {
              
        return response()->json([
            'data'=>$data,
            'success'=>true,
            'message'=>$message, 
            'status'=>200
        ]);

    }

    public function failed($message)
    {
        return response()->json([
            'data'=>'',
            'success'=>false,
            'message'=>$message,
            'status'=>500
        ]);
    }
}
