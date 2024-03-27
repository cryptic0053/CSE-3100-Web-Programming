<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QBExerciseController;


/* Task 1 */
Route::group(['prefix' => '/qb/user'], function() {
    Route::get('/', [QBExerciseController::class, 'read']);
    Route::get('/create', [QBExerciseController::class, 'create']);
    Route::get('/update/{id}', [QBExerciseController::class, 'update']);
    Route::get('/delete/{id}', [QBExerciseController::class, 'delete']);
});

