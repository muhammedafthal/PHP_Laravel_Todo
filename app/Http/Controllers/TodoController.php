<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home () {
        return view('welcome', ['title' => 'todo']);
    }
}
