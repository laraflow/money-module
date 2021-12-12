<?php

use Illuminate\Support\Facades\Route;
use Modules\Money\Http\Controllers\MoneyController;

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

Route::prefix('money')->group(function () {
    Route::get('/', [MoneyController::class, 'index']);
});
