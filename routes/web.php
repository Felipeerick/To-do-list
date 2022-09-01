<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToDoListController::class, 'index'])->name('index');

Route::post('/add', [ToDoListController::class, 'store'])->name('store');

Route::delete('/destroy/{id}', [ToDoListController::class, 'destroy'])->name('destroy');

