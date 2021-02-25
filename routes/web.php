<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ContactController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
})-> name('inicio'); */


Auth::routes();

Route::get('/', function(){
  return view('home');
 
  Route::view('/', 'welcome'); 

   })->middleware('auth'); 
   
/* Rutas que funcionan si estan autenticados con el login */

   Route::group(['middleware' => 'auth'], function () {

   Route::resource('/product', ProducController::class);     
   Route::resource('/category', CategoryController::class);
   Route::resource('/seller', SellerController::class);    
    
});

/* Rutas que  funciona sin  autenticar el login */
Route::get("/misproduct", [ProducController::class, 'misproduct'])->name('misproductos');
Route::get("/listado", [ProducController::class, 'listado'])->name('listadoproductos');
Route::resource('/contact', ContactController::class);


//Deshabilita el registro
Auth::routes(['register' => false]);





