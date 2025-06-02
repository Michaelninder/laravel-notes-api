<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\NoteController;

Route::prefix('avi/v1')->group(function () {
    Route::get('notes', [NoteController::class, 'index']);
    Route::post('notes', [NoteController::class, 'store']);
    Route::get('notes/{uuid}', [NoteController::class, 'show']);
    Route::put('notes/{uuid}', [NoteController::class, 'update']);
    Route::delete('notes/{uuid}', [NoteController::class, 'destroy']);
});
