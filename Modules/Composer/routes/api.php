<?php

use Illuminate\Support\Facades\Route;
use Modules\Composer\Http\Controllers\ComposerController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('composers', ComposerController::class)->names('composer');
});
