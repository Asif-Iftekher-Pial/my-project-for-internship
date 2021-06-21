<?php

use App\Http\Controllers\APIController\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getproduct',[ProductController::class,'getproduct']);
Route::get('/getproduct/{id}',[ProductController::class,'singleproduct']);
Route::post('/create_product',[ProductController::class,'createproduct']);