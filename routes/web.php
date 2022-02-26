<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GovernorateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryOwnerController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth','user_is_admin'])->group(function () {
    Route::get('owners', [LibraryOwnerController::class, 'index'])->name('owners');
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('addresses', [AddressController::class, 'index'])->name('addresses');
    Route::get('cities', [CityController::class, 'index'])->name('cities');
    Route::get('governorates', [GovernorateController::class, 'index'])->name('governorates');
    Route::get('countries', [CountryController::class, 'index'])->name('countries');
    Route::get('file-upload', [FileController::class, 'index'])->name('file-upload');
    Route::post('store', [FileController::class, 'store'])->name('store');
    Route::get('show-file/{id}', [FileController::class, 'showFile'])->name('show-file');
    Route::delete('delete-file', [FileController::class, 'deleteFile'])->name('delete-file');
    Route::get('options', [OptionController::class, 'index'])->name('options');
    Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
    Route::get('shipments', [ShipmentController::class, 'index'])->name('shipments');
    Route::get('tickets', [TicketController::class, 'index'])->name('tickets');
    //get size
    Route::get('sizes',[SizeController::class,'index'])->name('sizes');
    Route::get('sizes/{id}/paper-types',[SizeController::class,'showPaperTypes']);
    Route::get('sizes/{id}/layouts',[SizeController::class,'showLayouts']);
    Route::get('sizes/{id}/sides',[SizeController::class,'showSides']);
    Route::get('sizes/{id}/paper-type/{pid}/wrapping',[SizeController::class,'showPaperTypeWrapping']);
});



// Route::get('simple-qr-code', [QRCodeController::class, 'simpleQr']);
// Route::get('color-qr-code', [QRCodeController::class, 'colorQr']);
// Route::get('image-qr-code', [QRCodeController::class, 'imageQr']);
