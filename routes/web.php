<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenteController;

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
    return view('auth.login');
}); 

Route::resource('asistentes','App\Http\Controllers\AsistenteController');
Route::resource('accesos','App\Http\Controllers\AccesoController');
Route::resource('ingresos','App\Http\Controllers\IngresoController');
Route::get('/controlacceso/{id}', 'App\Http\Controllers\IngresoController@index');
Route::get('/ingresos/{id}', 'App\Http\Controllers\IngresoController@store');
Route::get('/checkin/{id}', 'App\Http\Controllers\IngresoController@checkin');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');


});




