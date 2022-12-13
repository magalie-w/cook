<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/recette', [RecetteController::class, 'index'])->name('recette.index');
Route::get('/recette/{titre}', [RecetteController::class, 'show'])->name('recette.show');