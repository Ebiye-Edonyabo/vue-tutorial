<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class ExampleController extends Controller
{
    public function index() {
        
        $names = [
            ['id' => 1, 'name' =>'John'],
            ['id' => 2, 'name' =>'Mary'],
            ['id' => 3, 'name' =>'James'],
        ];

        $age = 5 ;

        return Inertia::render('Welcome', [ 
            'names' =>  $names,
            'age' => $age,
        ]);
    }
  
}
