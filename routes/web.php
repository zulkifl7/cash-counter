<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');


Route::get('/admin/login', [AdminController::class, 'login']
)-> name('admin.login');

Route::get('/user/login',[UserController::class,'login']
)-> name('user.login');