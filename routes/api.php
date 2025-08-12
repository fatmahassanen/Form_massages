<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;

Route::middleware('api')->group(function () {
    Route::apiResource('messages', MessageController::class);
});
?>