<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tasks;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signout', function () {
    return view('home');
});

Route::get('/add', [Tasks::class, 'create'])->name('add');
Route::post('/add/create', [Tasks::class, 'storetask']);

Route::get('/pending', [Tasks::class, 'showPendingTasks'])->name('tasks.pending');

Route::get('/complete', [Tasks::class, 'showCompletedTasks'])->name('tasks.completed');
Route::get('delete/{id}', [Tasks::class, 'delete']);  // Delete a task

Route::get('update/{id}', [Tasks::class, 'edit'])->name('tasks.edit');
Route::put('update/{id}', [Tasks::class, 'update'])->name('tasks.update');

Route::get('complete/{task}', [Tasks::class, 'complete'])->name('task.complete');  // Show task creation form

Route::get('/login', [UserController::class, 'showLoginForm'])->name('signin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/sign', [UserController::class, 'showRegistrationForm'])->name('signup');
Route::post('/sign', [UserController::class, 'signUp'])->name('signup');

