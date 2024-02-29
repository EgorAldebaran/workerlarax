<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\InfoController;
use App\Http\Controllers\API\BuildMallApiController;

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

Route::get('/parser/run', [BuildMallApiController::class, 'parserRun']);
Route::get('/get/all', [BuildMallApiController::class, 'getAll']);
Route::get('/get', [BuildMallApiController::class, 'getOne']);
