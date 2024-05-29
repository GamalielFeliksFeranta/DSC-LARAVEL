<?php

use App\Http\Controllers\semuaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',[semuaController::class,'dashboard']);
Route::get('/stock',[semuaController::class,'stock']);
Route::get('/history',[semuaController::class,'historyPembelian']);