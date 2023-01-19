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
    $shoppingList= ["farina", "uova", "cioccolato", "pere", "vino bianco"];
    $quantityList= [
        "farina"=> 1,
         "uova"=> 6,
         "cioccolato"=> 3,
         "pere"=> 4,
         "vino bianco"=> 2
        ];

    return view('home',[
        "shoppingList"=>$shoppingList,
        "quantityList"=>$quantityList,
    ]);
});


