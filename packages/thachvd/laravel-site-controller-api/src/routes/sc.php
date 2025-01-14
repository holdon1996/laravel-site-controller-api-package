<?php

use App\Http\Controllers\Sc\TlLincolnController;
use Illuminate\Support\Facades\Route;

Route::prefix('/api')->group(function () {
    Route::prefix('/tl-lincoln', function() {
        Route::post('/empty-room', [TlLincolnController::class, 'getEmptyRoom'])->name('tllincoln-api.get-empty-room');
    });
});
