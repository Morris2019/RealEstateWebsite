<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaisonsController;
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

Route::get('/', [MaisonsController::class, 'index'])->name('index');
Route::get('/about', [MaisonsController::class, 'about'])->name('about');
Route::get('/services', [MaisonsController::class, 'services'])->name('services');
Route::get('/portfolio', [MaisonsController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [MaisonsController::class, 'contact'])->name('contact');
Route::get('/portifoliodetails', [MaisonsController::class, 'portifoliodetails'])->name('portifoliodetails');
Route::get('/membership', [MaisonsController::class, 'membership'])->name('membership');

Route::get('/maisonsAdmin', [MaisonsController::class, 'maisonsAdmin'])->name('maisonsAdmin');
