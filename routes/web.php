<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

require __DIR__ . '/auth.php';

Route::get('/', [TodoController::class, 'index'])->name('todos.index');

Route::middleware(['auth'])->group(function () {
    Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('todos', [TodoController::class, 'store'])->name('todos.store');
    Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::put('todos/{todo}/toggle-status', [TodoController::class, 'toggleStatus'])->name('todos.toggleStatus');
});
