<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MindDropController;
use App\Http\Controllers\IAController;

Route::middleware('api')->group(function () {
    Route::post('/token', [MindDropController::class, 'token']);

    Route::get('/drops', [MindDropController::class, 'index']);
    Route::post('/drops', [MindDropController::class, 'store']);
    Route::get('/drops/{drop}', [MindDropController::class, 'show']);
    Route::post('/drops/{drop}/support', [MindDropController::class, 'support']);
    Route::post('/drops/{drop}/ai', [IAController::class, 'respond']);
    Route::post('/drops/{drop}/report', [MindDropController::class, 'report']);

    Route::post('/ai/summary', [IAController::class, 'summary']);
});
