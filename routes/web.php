<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::post('/login', [Controllers\LoginController::class,'autenticar'])->name('site.login');

Route::middleware('autenticacion.middleware')->prefix('/app')->group(function(){
    Route::get('/home',[Controllers\HomeController::class,'index'])->name('app.home');
    Route::get('/cliente',[Controllers\ClienteController::class,'index'])->name('app.cliente');
    Route::get('/salir',[Controllers\LoginController::class,'salir'])->name('app.salir');


    Route::get('/proveedor',[Controllers\ProveedorController::class,'index'])->name('app.proveedor');
    Route::get('/proveedor/listar',[Controllers\ProveedorController::class,'listar'])->name('app.proveedor.listar');
    Route::post('/proveedor/listar',[Controllers\ProveedorController::class,'listar'])->name('app.proveedor.listar');
    Route::get('/proveedor/adicionar',[Controllers\ProveedorController::class,'adicionar'])->name('app.proveedor.adicionar');
    Route::post('/proveedor/adicionar',[Controllers\ProveedorController::class,'adicionar'])->name('app.proveedor.adicionar');
    Route::get('/proveedor/editar/{id}',[Controllers\ProveedorController::class,'editar'])->name('app.proveedor.editar');
    Route::post('/proveedor/editar/{id}',[Controllers\ProveedorController::class,'editar'])->name('app.proveedor.editar');
    Route::get('/proveedor/eliminar/{id}',[Controllers\ProveedorController::class,'eliminar'])->name('app.proveedor.eliminar');



    Route::resource('producto',Controllers\ProductoController::class);

    Route::resource('producto-detalle',Controllers\ProductoDetalleController::class);

});
