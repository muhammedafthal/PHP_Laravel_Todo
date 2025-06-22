<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'home'])->name('home');

Route::post('/create', [TodoController::class, 'add'])->name('add');

Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');

Route::get('/about', function() {
    echo "This is about page";
});
