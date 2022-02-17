<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

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
    return view('welcome');
});

Route::get('file-upload', [FileController::class, 'index'])->name('file-upload');
Route::post('store', [FileController::class, 'store'])->name('store');
Route::get('show-file/{id}',[FileController::class,'showFile'])->name('show-file');
Route::delete('delete-file',[FileController::class,'deleteFile'])->name('delete-file');
