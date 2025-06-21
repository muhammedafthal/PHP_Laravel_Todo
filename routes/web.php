<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'home']);

Route::get('/about', function() {
    echo "This is about page";
});
