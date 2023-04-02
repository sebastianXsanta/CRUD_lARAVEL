<?php
use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AerolineasController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/aerolineas/{id}/delete', [AerolineasController::class, 'delete']);

Route::get('/aerolineas/{id}/create',[AerolineasController::class, 'create']);
Route::post('/aerolineas/{id}',[AerolineasController::class, 'store']);
Route::resource('/aerolineas', AerolineasController::class);
Route::get('/aerolineas/{id}/delete', [AerolineasController::class, 'delete']);

Route::get('/aerolineas/{id}/create',[VuelosController::class, 'create']);

Route::post('/aerolineas/{id}',[VuelosController::class, 'store']);

Route::get('/aerolineas/{id}', [AerolineasController::class, 'edit']);

Route::get('/aerolineas/vuelos/{id}/delete', [VuelosController::class, 'delete']);
Route::delete('/aerolineas/vuelos/{id}', [VuelosController::class, 'destroy']);

Route::get('/aerolineas/vuelos/{id}/edit', [VuelosController::class, 'edit']);
Route::put('/aerolineas/vuelos/{id}', [VuelosController::class, 'update']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\AerolineasController::class, 'index'])->name('home');
