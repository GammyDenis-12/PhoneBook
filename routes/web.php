<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DashboardController;
use  App\Http\Controllers\AuthController;
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
Route::get('/sample', function () {
    return view('content.manageuser');
});


//dashboardController
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');


//AuthController
Route::get('/admin/login', [AuthController::class,'adminlogin'])->name('admin.login');
Route::post('/admin/post',[AuthController::class,'store'])->name('admin.post');



