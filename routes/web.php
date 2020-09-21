<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ScannerController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/apropos', function() {
	return view('about');
});

Route::resource('livres', LivreController::class);
Route::resource('clients', ClientController::class);
Route::resource('fournisseurs', FournisseurController::class);
Route::resource('commandes', CommandeController::class);

Route::get('scanner', [ScannerController::class, 'index']);
Route::post('scanner', [ScannerController::class, 'manageScan']);
