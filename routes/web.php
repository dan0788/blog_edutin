<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\holamundoController;
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
    return "Hola mundo";
});
Route::get('/hola',[holamundoController::class,'index'])->name('home');
Route::get('/submit', function () {
    return "Hi";
});
