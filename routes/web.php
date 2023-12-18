<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

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

Route::get('/',[Controllers\PrincipalController::class,'principal'])->name('site.principal');
Route::get('/sobre-nosotros', [Controllers\SobreNosotrosController::class,'sobreNosotros'])->name('site.sobrenosotros');
Route::get('/contactos', [Controllers\ContactosController::class,'contactos'])->name('site.contacto');
Route::post('/contactos', [Controllers\ContactosController::class,'guardar'])->name('site.contacto');
Route::get('/login', [Controllers\LoginController::class,'index'])->name('site.login');
Route::POST('/login', [Controllers\LoginController::class,'autenticar'])->name('site.login');

Route::middleware('autenticacion.middleware')->prefix('/app')->group(function(){
    Route::get('/home',[Controllers\HomeController::class,'index'])->name('app.home');
    Route::get('/cliente',[Controllers\ClienteController::class,'index'])->name('app.clientes');
    Route::get('/proveedor',[Controllers\ProveedorController::class,'index'])->name('app.proveedor');
    Route::get('/producto',[Controllers\ProductoController::class,'index'])->name('app.produto');
    Route::get('/salir',[Controllers\LoginController::class,'salir'])->name('app.salir');

});
