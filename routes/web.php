<?php

use App\Http\Controllers\CreateFlyController;
use App\Http\Controllers\CreatePassengerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create/fly',[CreateFlyController::class,'create']);


Route::get('create/pass',[CreatePassengerController::class,'create']);
Route::post('pass/store',[CreatePassengerController::class, 'store'])->name('fly.Store');