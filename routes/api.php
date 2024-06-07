<?php

use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\InstructionController;
use App\Http\Controllers\api\v1\SectionController;
use App\Http\Controllers\api\v1\ServiceController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('instructions', InstructionController::class);
    Route::apiResource('sections', SectionController::class);
});
