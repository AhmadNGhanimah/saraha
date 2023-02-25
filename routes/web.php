<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/favourite/{MessageID}',[App\Http\Controllers\HomeController::class,'favourite'])->name('favourite');

Route::get('/user/{UserID}',[App\Http\Controllers\HomeController::class,'SendMessage'])->name('SendMessageView');
Route::post('/user/{UserID}',[App\Http\Controllers\HomeController::class,'SentMessage'])->name('SentMessage');

Route::view('/','homepage')->middleware('auth')->name('messages');
Route::view('messages','messages');
Route::view('sidebar','layouts/sidebar');
Route::view('contact-us','contact-us')->name('contact-us');
Route::view('manage','manage')->name('manage');


Route::get('/lang/{Lang}',[App\Http\Controllers\HomeController::class,'ChangeLang'])->name('lang');
