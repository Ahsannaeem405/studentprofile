<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController; 
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
    return view('front1');
});


Route::post('getrecord',[studentController::class,'getrecord']);



Route::prefix('/admin')->middleware(['auth'])->group(function(){ 


    Route::get('/',[studentController::class,'viewstudents']);

    Route::post('image-save',[studentController::class,'imagesave']);

    Route::post('add-student',[studentController::class,'addstudent']);
    Route::post('update-student/{id}',[studentController::class,'updatestudent']);

    Route::get('delete-student/{id}',[studentController::class,'deletestudent']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[App\Http\Controllers\HomeController::class, 'logout']);