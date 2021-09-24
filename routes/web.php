<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/mytips', [App\Http\Controllers\TipsController::class, 'user_tips'])->name('mytips');

Route::get('/tip_add', [App\Http\Controllers\TipsController::class, 'index_add'])->name('tip.add');

Route::post('/tip_store', [App\Http\Controllers\TipsController::class, 'tip_store'])->name('tip.store');

Route::get('delete/{id}','App\Http\Controllers\TipsController@destroy');

});

