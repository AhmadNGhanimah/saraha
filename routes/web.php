<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('messages');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/favourite/{MessageID}',[App\Http\Controllers\HomeController::class,'favourite'])->name('favourite');

Route::get('/user/{UserID}',[App\Http\Controllers\HomeController::class,'SendMessage'])->name('SendMessageView');
Route::post('/user/{UserID}',[App\Http\Controllers\HomeController::class,'SentMessage'])->name('SentMessage');

Route::get('login/redirect/{provider}', [SocialController::class,'Redirect'])->name('social_login');
Route::get('login/callback/{provider}', [SocialController::class,'Callback']);


// Change Language
Route::get('language/{Lang}',[\App\Http\Controllers\HomeController::class,'ChangeLang'])->name('lang');

//Route::view('messages','messages');
//Route::view('sidebar','layouts/sidebar');
//Route::view('contact-us','contact-us')->name('contact-us');
//Route::view('manage','manage')->name('manage');
//Route::view('header','layouts.header');



//Route::get('/lang/{Lang}',[App\Http\Controllers\HomeController::class,'ChangeLang'])->name('lang');
