<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'home'])->name('home');

Route::post('/create', [TodoController::class, 'create'])->name('create');

Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');

Route::post('/delete/{id}', [TodoController::class, 'delete'])->name('delete');

Route::get('/about', function() {
    echo "This is about page";
});
