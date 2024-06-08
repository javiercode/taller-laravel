<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::prefix('usuario')->group(function (){
    Route::get('list', [ProductoController::class,'test']);
});
Route::prefix('producto')->group(function (){
    Route::get('list', [ProductoController::class,'test']);
});

Route::get('/hola', function () {
    return "¡Hola, mundo!";
});

//localhost:4535/usuario/list
//localhost:4535/producto/list