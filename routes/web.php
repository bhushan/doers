<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\FollowingController;

require __DIR__ . '/auth.php';

Route::get('/', [TodoController::class, 'index'])->name('todos.index');

Route::middleware(['auth'])->group(function () {
    Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('todos', [TodoController::class, 'store'])->name('todos.store');
    Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::put('todos/{todo}/toggle-status', [TodoController::class, 'toggleStatus'])->name('todos.toggleStatus');
});

Route::get('/@{user:username}', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/@{user:username}/followers', [FollowerController::class, 'index'])->name('followers.index');
Route::post('/@{user:username}/followers', [FollowerController::class, 'store'])->name('followers.store');
Route::delete('/@{user:username}/followers', [FollowerController::class, 'destroy'])->name('followers.destroy');

Route::get('/@{user:username}/following', [FollowingController::class, 'index'])->name('following.index');
