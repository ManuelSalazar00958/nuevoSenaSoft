<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\ventasController;

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('usuario', UsuariosController::class)->names('usuario')->parameters(['usuario'=>'request']);
Route::get('adminforusuarios',[UsuariosController::class,'listForAdmin'])->name('usuario.listForAdmin');
Route::resource('tienda', TiendasController::class)->names('tienda')->parameters(['tienda'=>'request']);
Route::resource('proveedor', ProveedoresController::class)->names('proveedor')->parameters(['proveedor'=>'request']);
Route::resource('sucursal', SucursalesController::class)->names('sucursal')->parameters(['sucursal'=>'request']);
Route::resource('ventas', ventasController::class)->names('ventas')->parameters(['ventas'=>'request']);
