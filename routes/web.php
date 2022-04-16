<?php

use Illuminate\Support\Facades\Route;


/*
    
    Test Route For Add, View & Dashboard Form

*/

// Route::get('/dashboard', function () {
//     return view('Admin.Dashboard.dashboard');
// });

Route::get('/',[App\Http\Controllers\UserApp\HomeController::class, 'index']);
Route::get('services',[App\Http\Controllers\UserApp\ServiceController::class, 'service']);

Route::get('/contact-us', function () {
    return view('App.Page.contact_form');
});

// Route::get('bill/{id}', function () {
//     return view('App.Email.bill');
// });
Route::get('bill/{id}',[App\Http\Controllers\Admin\BillController::class, 'bill']);

//Customer
Route::get("customer-register",[App\Http\Controllers\Customer\RegisterCustomerController::class, 'create']);
Route::post("customer-register",[App\Http\Controllers\Customer\RegisterCustomerController::class, 'store']);

Route::post('newsletter',[App\Http\Controllers\UserApp\HomeController::class, 'newsletter']);




Route::middleware([App\Http\Middleware\CheckPublicationStatus::class])->group(function(){

/*

    Cutomer Routes

*/
Route::middleware([App\Http\Middleware\CheckCustomerLogin::class])->group(function(){

Route::get("profile",[App\Http\Controllers\Customer\RegisterCustomerController::class, 'profile']);
Route::post("profile",[App\Http\Controllers\Customer\RegisterCustomerController::class, 'updateProfile']);


Route::get("create-parking",[App\Http\Controllers\Customer\ParkingController::class, 'create']);
Route::post("save-parking",[App\Http\Controllers\Customer\ParkingController::class, 'store']);
Route::get("parking-history",[App\Http\Controllers\Customer\ParkingController::class, 'index']);


});



/*

    Admin Routes

*/
Route::middleware([App\Http\Middleware\CheckAdminLogin::class])->group(function(){



Route::get("create-service",[App\Http\Controllers\Admin\ServiceController::class, 'create']);
Route::post("create-service",[App\Http\Controllers\Admin\ServiceController::class, 'store']);
Route::get("view-services",[App\Http\Controllers\Admin\ServiceController::class, 'index']);
Route::get("delete-service/{id}",[App\Http\Controllers\Admin\ServiceController::class, 'destroy']);
Route::get("edit-service/{id}",[App\Http\Controllers\Admin\ServiceController::class, 'edit']);
Route::post("update-service",[App\Http\Controllers\Admin\ServiceController::class, 'update']);


Route::get("view-customers",[App\Http\Controllers\Admin\CustomerController::class, 'index']);


Route::get("create-parking-center",[App\Http\Controllers\Admin\ParkingCenterController::class, 'create']);
Route::post("create-parking-center",[App\Http\Controllers\Admin\ParkingCenterController::class, 'store']);
Route::get("view-parking-centers",[App\Http\Controllers\Admin\ParkingCenterController::class, 'index']);
Route::get("delete-parking-center/{id}",[App\Http\Controllers\Admin\ParkingCenterController::class, 'destroy']);
Route::get("edit-parking-center/{id}",[App\Http\Controllers\Admin\ParkingCenterController::class, 'edit']);
Route::post("update-parking-center",[App\Http\Controllers\Admin\ParkingCenterController::class, 'update']);


Route::get("view-parkings",[App\Http\Controllers\Admin\ParkingController::class, 'index']);
Route::get("view-parking-booking",[App\Http\Controllers\Admin\ParkingController::class, 'parkingBooking']);
Route::get("update-parking-status/{id}/{status}",[App\Http\Controllers\Admin\ParkingController::class, 'updateParkingStatus']);


Route::get("create-user",[App\Http\Controllers\Admin\UserController::class, 'create']);
Route::post("create-user",[App\Http\Controllers\Admin\UserController::class, 'store']);
Route::get("view-users",[App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get("update-user-status/{id}/{status}",[App\Http\Controllers\Admin\UserController::class, 'updateUserStatus']);


Route::get("dashboard",[App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);

Route::get('view-newsletters',[App\Http\Controllers\Admin\NewsletterController::class, 'index']);
Route::get('delete-newsletter/{id}',[App\Http\Controllers\Admin\NewsletterController::class, 'destroy']);

Route::get('view-bill/{id}',[App\Http\Controllers\Admin\BillController::class, 'viewBill']);


Route::get('view-additional-charges',[App\Http\Controllers\Admin\AdditionalCharges::class, 'index']);
Route::get('create-additional-charges',[App\Http\Controllers\Admin\AdditionalCharges::class, 'create']);
Route::post('create-additional-charges',[App\Http\Controllers\Admin\AdditionalCharges::class, 'store']);
Route::get('delete-additional-charges/{id}',[App\Http\Controllers\Admin\AdditionalCharges::class, 'destroy']);

}); //end admin login middleware


});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
