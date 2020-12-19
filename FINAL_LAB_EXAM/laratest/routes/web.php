<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\logoutController;
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

Route::resource('/login','App\Http\Controllers\LoginController');
Route::resource('/admin','App\Http\Controllers\AdminController');
Route::post('/admin/employee/{id}',[AdminController::class,'updateEmployee'])->name('admin.updateEmployee');
Route::get('/admin/delete/{id}',[AdminController::class,'deleteEmployee'])->name('admin.deleteEmployee');

Route::resource('/employee','App\Http\Controllers\EmployeeController');
Route::get('/employee/delete/{id}',[EmployeeController::class,'deleteProduct'])->name('employee.deleteProduct');
Route::resource('/logout','App\Http\Controllers\logoutController');