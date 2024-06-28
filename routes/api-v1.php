<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/prueba', function () {
    return 'prueba';
});


Route::post('register', [RegisterController::class,'store'])->name('api.v1.registrer');
