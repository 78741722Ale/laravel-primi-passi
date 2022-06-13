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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    $name = "Alessandro";
    $surname = "Pecorilla";
    $role = "Junior Full Stack Web Developer";
    /* Prova array Associativo */
    $users = [
    /* Tutte queste rappresentano una serie di chiavi => valori */
        "Nome" => "Alessandro",
        "Cognome" => "Pecorilla",
        "Età" => "27",
        "Role" => "Junior Full Stack Web Developer",
    ];

/*     var_dump($users); */
    return view('home', compact('name', 'surname', 'role', 'users'));
});


Route::get('/a', function () {
    $page = "a";
    return view('test.a', compact('page'));
})->name('a');

Route::get('/b-nuova', function () {
    $page = "b";
    return view('test.b', compact('page'));
})->name('b');

Route::get('/c', function () {
    $page = "c";
    return view('test.c', compact('page'));
})->name('c');
