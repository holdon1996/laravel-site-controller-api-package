<?php

use App\Http\Controllers\Sc\TlLincolnController;
use Illuminate\Support\Facades\Route;

Route::prefix('/api')->group(function () {
    Route::get('', function (){
        echo "hello";
    });
    Route::prefix('/tl-lincoln')->group(function() {
        Route::post('/empty-room', [TlLincolnController::class, 'getEmptyRoom'])->name('tllincoln-api.get-empty-room');
        Route::post('/bulk-empty-room', [TlLincolnController::class, 'getBulkEmptyRoom'])->name('tllincoln-api.get-bulk-empty-room');
        Route::post('/price-plan', [TlLincolnController::class, 'getPricePlan'])->name('tllincoln-api.get-bulk-empty-room');
    });
});
