<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\hellocontroller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/regi_merchandise',[AppController::class,'register_merchandise']);

Route::get('/edit',[hellocontroller::class,'edit']);

Route::get('/delete',[hellocontroller::class,'delete']);

Route::get('/register',[hellocontroller::class,'register']);
