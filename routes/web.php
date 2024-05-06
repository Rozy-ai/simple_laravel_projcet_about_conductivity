<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThermalConductivityController;

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


Route::get('/', [ThermalConductivityController::class, 'index']);
Route::post('/calculate-thermal-conductivity', [ThermalConductivityController::class, 'calculate']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/calculate', function () {
//     return view('calculate');
// });