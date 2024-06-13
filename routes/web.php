<?php

use App\Http\Controllers\FlyController;
use App\Http\Controllers\PassengerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create/fly',[FlyController::class,'asociar']);
Route::post('fly/store', [FlyController::class,'store'])->name('fly.Store');


// Route::get('create/pass',[PassengerController::class,'create']);
// Route::post('pass/store',[PassengerController::class, 'store'])->name('fly.Store');