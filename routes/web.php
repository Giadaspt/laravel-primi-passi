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
    $data = [
        "welcome" => "Benvenuti",
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    return view('about');
})->name('about');

Route::get('/chi-siamo', function () {
    $contacts = [
        "weAre" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quasi.",
        "phone" => "123456",
        "email" => "blabla@email.mail",
        "location" => "via chissà dove",
        "city" => "L'isola che non c'è",
    ];

    return view('contacts', $contacts);
})->name('contacts');

Route::get('/sweets-and-pastries', function () {
    $cakes = [
        "cake" => [
            "Apple Pie",
            "Brownies Cake",
            "Charlotte di Marroni e Savoiard",
            "Cheese Cake Variegato",
            "Ciambella",
            "Dolce con Mele e Noci",
            "Plum Cake al Cioccolato",
            "Torta Cioccolato e Rum",
        ]
    ];

    return view('ourCakes', $cakes);
})->name('cake');
