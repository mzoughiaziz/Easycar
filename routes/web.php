<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::group(['middleware' => 'auth'], function () {



Route::get('/mytips', [App\Http\Controllers\TipsController::class, 'user_tips'])->name('mytips');

Route::get('/tip_add', [App\Http\Controllers\TipsController::class, 'index_add'])->name('tip.add');

Route::post('/tip_store', [App\Http\Controllers\TipsController::class, 'tip_store'])->name('tip.store');

//Route::get('/tip_delete', [App\Http\Controllers\TipsController::class, 'tip_delete'])->name('tip.delete');




});

