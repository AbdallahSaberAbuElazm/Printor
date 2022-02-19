<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LibraryOwnerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('owners',[LibraryOwnerController::class,'index'])->name('owners');

// Route::get('file-upload', [FileController::class, 'index'])->name('file-upload');
// Route::post('store', [FileController::class, 'store'])->name('store');
// Route::get('show-file/{id}',[FileController::class,'showFile'])->name('show-file');
// Route::delete('delete-file',[FileController::class,'deleteFile'])->name('delete-file');
// Route::get('simple-qr-code', [QRCodeController::class, 'simpleQr']);
// Route::get('color-qr-code', [QRCodeController::class, 'colorQr']);
// Route::get('image-qr-code', [QRCodeController::class, 'imageQr']);


