<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('base')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();


        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age') //getting query parameters directly instead of what i did with $name 
            ]);
    }

    public function show($id){
        return view('pizzas.show', ['id' => $id]);
    }

    public function create(){
        return view ('pizzas.create');
    }
}
