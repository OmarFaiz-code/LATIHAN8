<?php

use Illuminate\Support\Facades\Route;
use Modules\Composer\Http\Controllers\ComposerController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('composers', ComposerController::class)->names('composer');
});
