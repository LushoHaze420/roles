<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SA\HomeController;
use App\Http\Controllers\SA\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Cargar archivo de rutas para superadmin
Route::prefix('superadmin')
    ->middleware(['web'])
    ->namespace('App\Http\Controllers')
    ->group(base_path('routes/superadmin.php'));

// SUPERADMIN
Route::get('home', [HomeController::class, 'index'])->name('sa.home');

//Route::get('home/usuarios', [UsuarioController::class, 'show'])->name('sa.usuarios.show');

Route::controller(UsuarioController::class)->group(function(){
    //Route::get('admincapacitaciones/adminnuevousuario','create')->name('adminFormNuevoUsuario');
    Route::get('home/usuarios', 'show')->name('sa.usuarios.show');
    //Route::post('admincapacitaciones/storeadminnuevousuario','store')->name('storeAdminNuevoUsuario');
});

