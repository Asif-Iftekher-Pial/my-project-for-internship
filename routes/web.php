<?php

use App\Http\Controllers\Backend\Admin_panel\AdminProfileController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerFormController;
use App\Http\Controllers\Backend\Admin_panel\ViewCustomerOrdersController;
use App\Http\Controllers\Backend\Admin_panel\ViewProductController;
use App\Http\Controllers\Backend\Admin_panel\ViewEmployeeController;
use App\Http\Controllers\Backend\Admin_panel\ViewEmployeeFormController;
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

Route::get('/', function () {
    return view('backend.login.login');
});




//view products Gallary
Route::get('view_products',[ViewProductController::class,'product'])->name('product');


// Employee Routes
Route::get('view_employees',[ViewEmployeeController::class,'employee'])->name('employee');
Route::get('view_eform',[ViewEmployeeFormController::class,'form'])->name('form');
Route::post('view_eform_saved',[ViewEmployeeFormController::class,'insert'])->name('savedform');
Route::get('employee/delete/{id}',[ViewEmployeeFormController::class,'delete'])->name('employee.delete');





// Customer Routes
Route::get('view_customers',[ViewCustomerController::class,'customer'])->name('customer');
Route::get('view_customers_form',[ViewCustomerFormController::class,'customerForm'])->name('customerform');
Route::post('customers_form_saved',[ViewCustomerFormController::class,'create'])->name('customerformSaved');
Route::get('customer/delete/{id}', [ViewCustomerFormController::class, 'delete'])->name('delete');
// Route::get('customer/edit/{id}', [ViewCustomerFormController::class, 'edit'])->name('edit');
// Route::put('customer/update/{id}', [ViewCustomerFormController::class, 'update'])->name('update');




//Customer Orders Table
Route::get('customer_orders',[ViewCustomerOrdersController::class,'customerOrder'])->name('customerOrders');




//Admin Profile
Route::get('admin_profile',[AdminProfileController::class,'adminProfile'])->name('profile');