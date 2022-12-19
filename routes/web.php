<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\DashboardController;
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

// ->middleware('guest') si on est connecté ça redirige vers /dashboard
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('store');
// Deconnexion et rédirige vers /login
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');


// ->middleware('auth') si on est pas connecté on n'a pas accès au dashboard et redirige vers /login
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
