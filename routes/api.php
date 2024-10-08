<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\nikhil;

use App\Http\Controllers\api\authcontroller;
use App\Models\User;

use App\Http\Middleware\CheckApiKey;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/databb', function(){
  $nikhil = User::all();
  return response()->json($nikhil);
  
})->middleware(CheckApiKey::class)->name('fetchdata');



Route::get('nikhil', [nikhil::class, 'index']);



// Auth
Route::post('signup', [authcontroller::class, 'signup']);
Route::post('login', [authcontroller::class, 'login']);