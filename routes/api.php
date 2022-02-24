<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SizeController;

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

Route::post('auth/register',[App\Http\Controllers\Api\AuthController::class,'register']);
Route::post('auth/login',[App\Http\Controllers\Api\AuthController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    //Store file
    Route::post('files',[App\Http\Controllers\Api\FileController::class,'store']);
    //Get Option's Sizes
    //get size
    Route::get('sizes',[SizeController::class,'index']);
    Route::get('sizes/{id}/paper-types',[SizeController::class,'showPaperTypes']);
    Route::get('sizes/{id}/layouts',[SizeController::class,'showLayouts']);
    Route::get('sizes/{id}/sides',[SizeController::class,'showSides']);
    Route::get('sizes/{id}/paper-type/{pid}/wrapping',[SizeController::class,'showPaperTypeWrapping']);
    //Get Options
    Route::get('options',[App\Http\Controllers\Api\OptionController::class,'index']);
    // Store options
    Route::post('options',[App\Http\Controllers\Api\OptionController::class,'store']);


    //Store Products
    Route::post('products', [App\Http\Controllers\Api\ProductController::class, 'store']);
    //Destory Products
    Route::delete('products/{id}',[App\Http\Controllers\Api\ProductController::class,'destory']);
    //Get Orders
    Route::get('orders',[App\Http\Controllers\Api\OrderController::class,'index']);
    //Get Address
    Route::get('addresses',[App\Http\Controllers\Api\AddressController::class,'index']);
    //Get User
    Route::get('users',[App\Http\Controllers\Api\UserController::class,'show']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
