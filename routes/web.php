<?php

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\FlyController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// RUTA PRINCIPAL
Route::get('dashboard',[MainController::class,'home'])->name('dasboard.home');

//VUELOS\\
Route::get('create/fly',[FlyController::class,'asociar'])->name('fly.Create');
Route::post('fly/store', [FlyController::class,'store'])->name('fly.Store');
Route::get('create/listar',[FlyController::class,'index'])->name('fly.index');
Route::get('create/{codefly}',[FlyController::class,'show'])->name('fly.show');
Route::get('create/{codefly}/editar',[FlyController::class,'edit'])->name('fly.edit');
Route::put('create/{codefly}',[FlyController::class,'update'])->name('fly.update');

//PASAJEROS\\

Route::get('pass/create',[PassengerController::class,'asociar'])->name('pass.Create');
Route::post('pass/store',[PassengerController::class,'store'])->name('pass.Store');
Route::get('pass/listar', [PassengerController::class,'index'])->name('pass.index');

//PASAJEROS-VUELO\\
Route::get('/fly/{codefly}/pass',[FlyController::class,'flypass'])->name('fly.pass');
Route::delete('passengers/{passenger}', [PassengerController::class, 'destroy'])->name('passenger.destroy');

//LOGIN\\
Route::view('login',"login")->name('login');
Route::view('/registro',"registro")->name('registro');
Route::view('/privada',"main/dashboard")->middleware('auth')->name('privada');
Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//ADMIN\\
Route::get('/admin',[AdminUserController::class,'index'])->name('admin.users');
Route::get('/users/editar/{id}', [AdminUserController::class, 'edit'])->name('user.edit');