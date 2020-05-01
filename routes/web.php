<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    //get data from db
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
});

Route::get('/pizzas/{id}', function ($id) {
    //use the $id var to query the db for a record
    return view('details', ['id' => $id]);
});
