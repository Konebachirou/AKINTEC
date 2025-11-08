<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

use Illuminate\Support\Facades\Route;


Route::get('/',  [AccueilController::class, 'Home'])->name('home_link');
Route::get('/Qui-somme-nous',  [AboutController::class, 'about'])->name('about_link');
Route::get('/contact',  [ContactController::class, 'contact'])->name('contact_link');
Route::get('/nous-rejoindre',  [AccueilController::class, 'rejoindre'])->name('rejoindre_link');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact_send');
Route::get('/maintenance',  [AccueilController::class, 'maintenance'])->name('maintenance_link');

Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services_link');
