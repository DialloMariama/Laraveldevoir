<?php

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


Route::get('/createSe', [App\Http\Controllers\SemestreController::class, 'create']);
Route::post('/createSe', [App\Http\Controllers\SemestreController::class, 'store']);

Route::get('/createMat', [App\Http\Controllers\MatiereController::class, 'create']);
Route::post('/createMat', [App\Http\Controllers\MatiereController::class, 'store']);

Route::get('/create', [App\Http\Controllers\EtudiantController::class, 'create']);
Route::post('/create', [App\Http\Controllers\EtudiantController::class, 'store']);

Route::get('/index', [App\Http\Controllers\EtudiantController::class, 'index'])->name('index');
