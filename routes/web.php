<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\StarWarsController;
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

Route::get('/', [ActorController::class, 'filter']);
Route::get('/starwars', [StarWarsController::class, 'filter']);
