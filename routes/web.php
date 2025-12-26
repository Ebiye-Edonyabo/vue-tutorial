<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [ ExampleController::class, 'index'])->name('home');
Route::post('/store', [ ExampleController::class, 'store']);
