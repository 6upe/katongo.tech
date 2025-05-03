<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('index');
});

Route::resource('projects', ProjectController::class);

Route::get('/post-project', [ProjectController::class, 'create'])->name('projects.create');
