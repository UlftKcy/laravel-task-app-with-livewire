<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/profile', 'main.profile')->name('profile');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::get('/create-task', [TaskController::class, 'create'])->name('task.create');

    Route::post('task-store', [TaskController::class, 'store'])->name('task.store');
});

require __DIR__ . '/auth.php';
