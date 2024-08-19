<?php

use Illuminate\Support\Facades\Route;
use App\Models\products;
use App\http\Controllers\productsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get("/",[productsController::class,'home']);

Route::post("/addcart/{product}",[productsController::class,'addcart'])->middleware("auth");



//cart
Route::get("/cartlist",[productsController::class,'cartlist']);

Route::put("/checkout/{cartid}",[productsController::class,'checkout']);

Route::delete("/{id}/cartdelete",[productsController::class,'delete']);



//login 
Route::get("/login",[UserController::class,'login'])->name("login");

Route::post("/loginverify",[UserController::class,'loginverify']);

Route::get("/register",[UserController::class,'register']);

Route::post("/res_user",[UserController::class,'res_user']);

Route::post("/logout",[UserController::class,'destroy']);

Route::get("/otppage/{email}",[UserController::class,'otppage'])->name("sendotp");

Route::post("/verifyemail/{email}",[UserController::class,'verifyemail']);




