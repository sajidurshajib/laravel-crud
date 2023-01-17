<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('jokes', [JokesController::class, 'index']);
Route::post('jokes', [JokesController::class, 'store']);
Route::get('jokes/{id}', [JokesController::class, 'show']);
Route::put('jokes/{id}', [JokesController::class, 'edit']);
Route::delete('jokes/{id}',[JokesController::class, 'destroy']);
