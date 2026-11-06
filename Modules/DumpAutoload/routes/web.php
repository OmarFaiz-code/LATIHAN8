<?php

use Illuminate\Support\Facades\Route;
use Modules\DumpAutoload\Http\Controllers\DumpAutoloadController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('dumpautoloads', DumpAutoloadController::class)->names('dumpautoload');
});
