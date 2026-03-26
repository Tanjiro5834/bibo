<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AiController;
use App\Http\Controllers\AuthController;

/*****************************************************
 * AI Quiz App Routes
 *****************************************************/

Route::get('/ai/generate-quiz', [AiController::class, 'generateQuiz']);
Route::get('/ai/generate-image-choices', [AiController::class, 'generateImagesChoices']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
