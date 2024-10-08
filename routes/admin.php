<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\TransactionController;

Route::get('/send-money', [TransactionController::class, 'create'])->name('send.money.form');
Route::post('/send-money', [TransactionController::class, 'store'])->name('send.money');

Route::get('admin', [admincontroller::class, 'index']);


Route::get('admin/addpost', [admincontroller::class, 'addpostview']);
Route::post('admin/postadd', [admincontroller::class, 'addpost']);

Route::post('admin/catadd', [admincontroller::class, 'addcat']);
