<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Clase 3
Route::get('/producto', "ProductController@mostrar");
Route::get('/productoCarpeta', "ProductController@mostrarViewCarpeta");
Route::get('/productoView', "ProductController@mostrarView");
Route::get('/productoCompact', "ProductController@mostrarViewCarpetaCompact");
*/

/*
Clase 4
*/
Route::get('/productos', "ProductController@mostrarProducts");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
