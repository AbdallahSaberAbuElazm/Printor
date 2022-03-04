<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SizeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\LibraryOwnerController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FileController;

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

Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

//General routes
Route::get('countries', [CountryController::class, 'index']);
Route::get('countries/{id}/governorates', [CountryController::class, 'showGovernorates']);
Route::get('countries/{id}/cities', [CountryController::class, 'showCities']);


Route::middleware(['auth:sanctum'])->group(function () {
    //Get User
    Route::get('users', [UserController::class, 'show']);
    //Get Address
    Route::get('addresses', [AddressController::class, 'index']);
    //Get , Store file
    Route::get('show-files/{id}',[FileController::class,'show']);
    Route::post('store-files', [FileController::class, 'store']);
    //Get Full Option (size,paper_types,sides,layouts,wrapping)
    Route::get('sizes', [SizeController::class, 'index']);
    Route::get('sizes/{id}/paper-types', [SizeController::class, 'showPaperTypes']);
    Route::get('sizes/{id}/layouts', [SizeController::class, 'showLayouts']);
    Route::get('sizes/{id}/sides', [SizeController::class, 'showSides']);
    Route::get('sizes/{id}/paper-type/{pid}/wrapping', [SizeController::class, 'showPaperTypeWrapping']);
    //Options
    Route::get('options/{id}', [OptionController::class, 'show']);
    Route::post('options', [OptionController::class, 'store']);
    Route::put('options', [OptionController::class, 'update']);
    //Store Product (file+ no.of.copies + option)
    Route::post('products', [ProductController::class, 'store']);
    //Destory Products
    Route::delete('products/{id}', [ProductController::class, 'destory']);
    //Get Libraries
    Route::get('libraries', [LibraryOwnerController::class, 'index']);
    //Get Payments
    Route::get('payments', [PaymentController::class, 'index']);
    // Orders
    Route::post('orders/{id}', [OrderController::class, 'store']);
    Route::get('orders', [OrderController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
