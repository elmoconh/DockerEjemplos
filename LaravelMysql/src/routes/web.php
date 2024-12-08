<?php

use App\Http\Controllers\MessageController;

Route::get('/', [MessageController::class, 'index'])->name('messages.index');
Route::post('/', [MessageController::class, 'store'])->name('messages.store');

