<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('homePage');
});

Route::get('/', static function () {
    return view('welcome');
});
Route::get('/products', function () {
    $products = DB::table('Products')->get();
    return view('products.welcome',compact('products'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
