<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\postview;


use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Auth\authcontroller;
use App\Http\Controllers\Auth\signupcontroller;

Route::get('/', [homecontroller::class, 'index'])->name('home');


//authcontroller
Route::get('/login', [authcontroller::class, 'loginview'])->name('login')->middleware('guest');
Route::post('/login', [authcontroller::class, 'loginstore'])->name('login');
Route::post('/logout', [authcontroller::class, 'logout']);

Route::get('/signup', [signupcontroller::class, 'signupview'])->name('signup');
Route::post('/signup', [signupcontroller::class, 'signupstore']);


//Demo
Route::get('menu', function (){

  return view('menu');
});

//Admin Route
require __DIR__.'/admin.php';


//Slug post Cat

Route::get('/{slug}', [postview::class, 'postopen']);


