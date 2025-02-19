<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controller\BarChartController;
use App\Http\Controller\PDFController;

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
Route::get('register',[AdminController::class,'register']);
Route::get('login',[AdminController::class,'login']);
Route::get('barchart',[BarChartController::class,'Barchart']);
Route::get('member-pdf',[PDFController::class,'member-pdf'])->name('member-pdf');