<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $names = [
        ['id' => 1, 'name' =>'John'],
        ['id' => 2, 'name' =>'Mary'],
        ['id' => 3, 'name' =>'James'],
    ];

    return Inertia::render('Welcome', [ 
        'names' =>  $names
    ]);
});
