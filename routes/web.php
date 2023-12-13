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
Route::post('/contactos', [Controllers\ContactosController::class,'contactos'])->name('site.contacto');
Route::get('/login',function(){ return "Login";})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes',function(){ return "Clientes";})->name('app.clientes');
    Route::get('/proveedores',function(){ return "Proveedores";})->name('app.proveedores');
    Route::get('/productos',function(){ return "Productos";})->name('app.produtos');

});