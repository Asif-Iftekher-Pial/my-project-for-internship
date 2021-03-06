<?php

use App\Http\Controllers\Backend\Admin_panel\AdminProfileController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerFormController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerOrdersController;
use App\Http\Controllers\Backend\Admin_panel\ViewProductController;
use App\Http\Controllers\Backend\Admin_panel\ViewEmployeeController;
use App\Http\Controllers\Backend\Admin_panel\ViewEmployeeFormController;
use App\Http\Controllers\Backend\Catagory\ProductCatagory;
use App\Http\Controllers\Backend\CouponController\CouponController;
use App\Http\Controllers\Backend\Login_panel\LoginController;
use App\Http\Controllers\Backend\Products_panel\CreateProductForm;
use App\Http\Controllers\Backend\Products_panel\ProductAlbum;
use App\Http\Controllers\Backend\Products_panel\ProductTable;
use App\Http\Controllers\Backend\Report_Generator\Reports;
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\ForgatePassword\ForgatePasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\OrderandCart\OrderController;
use App\Http\Controllers\Frontend\Product\ProductDetails;
use App\Http\Controllers\Frontend\UserAuthentication\UserLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//..............................FrontEnd Route Strats From here..........................


Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');
Route::post('/registration', [UserLoginController::class, 'registration'])->name('user_registration');
Route::get('/login_page', [UserLoginController::class, 'userloginpage'])->name('user_Login');
Route::post('/login', [UserLoginController::class, 'login'])->name('Login');
Route::get('/logout', [UserLoginController::class, 'logout'])->name('logout');


//forgate Password
Route::get('/submitpage', [ForgatePasswordController::class, 'submitpage'])->name('submitpage');
Route::post('/submitpage-link', [ForgatePasswordController::class, 'submitpagelink'])->name('submitpagelink');
Route::get('/submitpage-link-click/{token}/{email}', [ForgatePasswordController::class, 'passwordReset'])->name('password.reset');



Route::post('/reset-password', [ForgatePasswordController::class, 'resetPassword'])->name('password.reset.post');


//Product Routing 
Route::group(['prefix' => 'product'], function () {

    Route::get('/view/{id}', [ProductDetails::class, 'viewproduct'])->name('product_details');
    Route::get('/catagorized_product/{id}', [ProductDetails::class, 'catagorizedproduct'])->name('catagorizedproduct');

    //Product add to cart
    Route::get('/add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('addToCart');
    Route::get('/view_cart', [OrderController::class, 'viewCart'])->name('viewCart');
    Route::get('/remove_cart/{rowId}', [OrderController::class, 'removecartitem'])->name('removecartitem');
    Route::post('/cart_update/{rowId}', [OrderController::class, 'cartupdate'])->name('cartupdate');
    Route::get('/cart_clearcart', [OrderController::class, 'clearcart'])->name('clearcart');


    //Ordered Table
    Route::post('/ordered_product', [OrderController::class, 'ordered_product'])->name('ordered_product');
    Route::get('/orderform', [OrderController::class, 'orderform'])->name('orderform');
    //my orders
    Route::get('/myorders', [OrderController::class, 'myorders'])->name('myorders');
});

















//..............................FrontEnd Route End ..........................



//...........................Route BackEnd Starts from here......................

//Only Admin Can Access
Route::group(['prefix' => 'admin'], function () {

    //login Route
    Route::get('/login', [LoginController::class, 'adminlogin'])->name('adminlogin');
    Route::post('/do_login', [LoginController::class, 'dologin'])->name('dologin');
    Route::get('/', [LoginController::class, 'homecontroller'])->name('home')->middleware('auth');
    Route::get('/logout', [LoginController::class, 'logout'])->name('adminlogout');


    route::group(['middleware' => 'admin-auth'], function () {



        // Employee Routes
        Route::get('view_employees', [ViewEmployeeController::class, 'employee'])->name('employee');
        Route::get('view_eform', [ViewEmployeeFormController::class, 'form'])->name('form');
        Route::post('view_eform_saved', [ViewEmployeeFormController::class, 'insert'])->name('savedform');
        Route::get('employee/delete/{id}', [ViewEmployeeFormController::class, 'delete'])->name('employee.delete');
        Route::get('employee/view/{id}', [ViewEmployeeFormController::class, 'employeeview'])->name('employee.view');

        //Reports generator 
        Route::get('reports', [Reports::class, 'report'])->name('report');

        //coupon routes
        Route::get('/add_coupon', [CouponController::class, 'add'])->name('coupon');
        Route::post('/make_coupon', [CouponController::class, 'create'])->name('coupon_create');
    });
});

//Both Admin And Employee Can Access
route::group(['middleware' => 'auth'], function () {

    // Customer Routes
    Route::get('/view_customers', [ViewCustomerController::class, 'customer'])->name('customer');
    Route::get('/customerlist', [ViewCustomerController::class, 'customerlist'])->name('customerlist');
    Route::get('/customer/delete/{id}', [ViewCustomerController::class, 'delete'])->name('customer_delete');


    //Products Route
    Route::get('product_form', [CreateProductForm::class, 'index'])->name('product_form');
    Route::post('product_create', [CreateProductForm::class, 'create'])->name('product_create');
    Route::get('product/edit/{id}', [CreateProductForm::class, 'edit'])->name('product_edit');
    Route::put('product/update/{id}', [CreateProductForm::class, 'update'])->name('product_update');
    Route::get('product/delete/{id}', [ProductTable::class, 'delete'])->name('delete');
    Route::get('product_list', [ProductTable::class, 'index'])->name('view_product');
    Route::get('/searchProduct', [ProductTable::class, 'searchProduct'])->name('searchProduct');



    //Catagory
    Route::get('catagory_list', [ProductCatagory::class, 'index'])->name('catagory_list');
    Route::post('catagory_create', [ProductCatagory::class, 'create'])->name('catagory_crate');

    //Customer Orders Table
    Route::get('customer_orders', [ViewCustomerOrdersController::class, 'customerOrder'])->name('customerOrders');
    Route::get('/customer_orders_detail/{id}', [ViewCustomerOrdersController::class, 'ordersdetails'])->name('ordersdetails');
    Route::get('/deliveroption/{id}/{status}', [ViewCustomerOrdersController::class, 'statusupdate'])->name('statusupdate');

    
});



//Only Employee Can Access

Route::group(['prefix' => 'employee'], function () {

    route::group(['middleware' => 'employee-auth'], function () {
        //Employee Profile
        Route::get('/admin_profile', [AdminProfileController::class, 'adminProfile'])->name('profile');
        //Employee Password Update
        Route::post('/employee_profile/updatepassword/{id}', [AdminProfileController::class, 'passwordupdate'])->name('passwordupdate');

        Route::get('/edit', [AdminProfileController::class, 'profileedit'])->name('editProfile');
        Route::put('/employee/update', [AdminProfileController::class, 'update'])->name('profileupdate');
    });
});
//...........................................Route BackEnd  end .................................