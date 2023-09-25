<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return '<h1>Hello Wolrd</h1>';
    $data= [
        "nome"=> "Dario",
        "cognome"=> "Esposito",
        "calciatori" => ["Meret", "Scalvini", "Lovato", "Darmian", "Kristensen", "Strootman", "Zielinski", "Weah", "F.Anderson", "Leao", "Lukaku",],
    ];

    
        
    return view('home', $data);
    
});

Route::get('/probabiliformazioni', function () {
    return '<h1>Qui si consultano le probbabili formazioni della Serie A</h1>';
    
});
