<?php

use App\Http\Controllers\ToDoApController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToDoApController::class, 'index'])->name('home.page');
Route::get('/newTask', [ToDoApController::class, 'create'])->name('newTask.page');
Route::post('/newTask', [ToDoApController::class, 'store'])->name('store.page');
Route::delete('/newTask/{id}', [ToDoApController::class, 'destroy'])->name('destroy.record');
Route::get('/newTask/{id}', [ToDoApController::class, 'edit'])->name('edit.page');
Route::put('/update/{id}', [ToDoApController::class, 'update'])->name('update.record');
Route::put('/complete/{id}', [ToDoApController::class, 'complete'])->name('complete.task');

