<?php

use App\Http\Controllers\EtudiantController;
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

//Etudiant
Route::get('/etudiant/all', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/add', [EtudiantController::class, 'add'])->name('etudiant.add');
Route::post('/etudiant/store', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::post('/etudiant/update', [EtudiantController::class, 'update'])->name('etudiant.edit');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant/delete/{id}', [EtudiantController::class, 'delete'])->name('etudiant.delete');