<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/',function(){
    return view('home');
});
Route::get('/admin',function(){
    return view('layouts.admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth','AdminMiddleware'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\adminCont::class,'userCount']);
    Route::get('/users',[App\Http\Controllers\adminCont::class,'show'])->name('show');
    Route::get('/accepted/{id}',[App\Http\Controllers\adminCont::class,'Accepted'])->name('accept');
    Route::get('/delete/{id}',[App\Http\Controllers\adminCont::class,'delete'])->name('delete');
});
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('log');
