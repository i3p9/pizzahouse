<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veggy', 'base' => 'thin and crispy']
        ];
    
        $name = request('name'); //requesting name query variable and storing in $name
    
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => request('age') //getting query parameters directly instead of what i did with $name 
            ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
