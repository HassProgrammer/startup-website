<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/store', [BlogController::class, 'store']);

//BackEnd Routs

Route::get('/admin',[DashboardController::class, 'index' ])->name('admin');
Route::get('/admin/appointment',[DashboardController::class, 'appointment' ])->name('appointment');


// blog
Route::get('/admin/blog/create',[BlogController::class, 'create' ])->name('blog.create');
Route::post('/blog/create',[BlogController::class, 'store' ])->name('blog.store');


// authentication
Route::get('/signup', [AuthController::class,'signup'])->name('signup');
Route::get('/login', [AuthController::class,'login'])->name('login');

