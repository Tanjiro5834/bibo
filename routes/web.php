<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthChecker;

Route::middleware(AuthChecker::class)->group(function () {
    Route::get('/', [PageController::class, 'dashboard']);
    Route::get('dashboard', [PageController::class, 'dashboard']);
    Route::get('curriculum', [PageController::class, 'curriculum']);
    Route::get('games', [PageController::class, 'games']);

    Route::get('profile', [PageController::class, 'profile']);
    Route::get('leaderboard', [PageController::class, 'leaderboard']);
    Route::get('settings', [PageController::class, 'settings']);
    Route::get('research', [PageController::class, 'research']);
    Route::get('tutor', [PageController::class, 'tutor']);    Route::post('tutor/chat', [PageController::class, 'tutorChat']);    Route::get('ai-tutor', function () {
        return redirect('/tutor');
    });
     Route::get('achievements', [PageController::class, 'achievements']);
});


Route::get('login', [AuthController::class, 'loginView']);
Route::get('register', [AuthController::class, 'registerView']);

Route::prefix('/api')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
