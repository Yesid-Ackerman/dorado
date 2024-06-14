<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FlyController;
use App\Http\Controllers\PassengerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create/fly',[FlyController::class,'asociar']);
Route::post('fly/store', [FlyController::class,'store'])->name('fly.Store');
Route::get('create/listar',[FlyController::class,'index'])->name('fly.index');
Route::get('create/{codefly}',[FlyController::class,'show'])->name('fly.show');
// Route::get('create/editar',[FlyController::class,'']);
