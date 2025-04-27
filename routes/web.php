<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $app_name = "Laravel 10";
//     return view('home', compact('app_name'));
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/' ,[PagesController::class, 'home'])->name('home');
Route::get('/shop' ,[PagesController::class, 'shop'])->name('shop');
Route::get('/contact' ,[PagesController::class, 'contact'])->name('contact');
