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
    return view('home');
});


// "get " come i axios perchè voglio che la rotta restituisca qualcosa quando l'utente esegue un metodo get nell'url. Come vohlio l'url di ricerca
// ::get ->metodi statici per restituire un procedimento
// funzione di call back

Route::get('/contact', function() {
    return view('contact');
});

// per entrare nella cartella devo usare la dot notation e non il path
Route::get('/menu/about', function() {
    return view('menu.about');
});


// nelle parentesi[]-> c'è um array associativo chiave valore
// Route::get('/', function() {

//     $nome = "Loris";

//     return view('home', ['nome' => $nome]);
// });