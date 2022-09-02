<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::post('/add', [TaskController::class, 'store'])->name('store');

Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');