<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::view('homepage','homepage')->middleware('auth')->name('messages');
Route::view('messages','messages');
Route::view('sidebar','layouts/sidebar');
Route::view('contact-us','contact-us')->name('contact-us');

