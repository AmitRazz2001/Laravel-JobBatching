<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestMailController;
use App\Http\Controllers\CSVController;

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

Route::get('/',[TestMailController::class, 'index']);

Route::get('/upload', [CSVController::class, 'index']);

Route::post('/upload', [CSVController::class, 'upload']);

Route::get('/batch', [CSVController::class, 'batch']);

