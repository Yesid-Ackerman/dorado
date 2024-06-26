<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FlyController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// RUTA PRINCIPAL
Route::get('dashboard',[MainController::class,'home'])->name('dasboard.home');

//VUELOS\\
Route::get('create/fly',[FlyController::class,'asociar']);
Route::post('fly/store', [FlyController::class,'store'])->name('fly.Store');
Route::get('create/listar',[FlyController::class,'index'])->name('fly.index');
Route::get('create/{codefly}',[FlyController::class,'show'])->name('fly.show');
Route::get('create/{codefly}/editar',[FlyController::class,'edit'])->name('fly.edit');
Route::put('create/{codefly}',[FlyController::class,'update'])->name('fly.update');

//PASAJEROS\\

Route::get('pass/create',[PassengerController::class,'asociar']);
Route::post('pass/store',[PassengerController::class,'store'])->name('pass.Store');

//PASAJEROS-VUELO\\
Route::get('/fly/{codefly}/pass',[FlyController::class,'flypass'])->name('fly.pass');
Route::delete('passengers/{passenger}', [PassengerController::class, 'destroy'])->name('passenger.destroy');

