<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index() {
        
        $names = User::all();

        $age = 5 ;

        return Inertia::render('Welcome', [ 
            'names' =>  $names,
            'age' => $age,
        ]);
    }
  
    public function store(Request $request) {

        $validate = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
       ]);

        return redirect()->route('home');;
    }
}
