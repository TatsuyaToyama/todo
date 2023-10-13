<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    public function index(){
        $Todos = Todo::all();
        return view('index', compact('Todos'));
    }

    public function store(Request $request){
        $Todo  = $request ->only(['content']);
        Todo::create($Todo);
        return redirect('/');
    }

}
