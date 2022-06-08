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
    $id = 4;
    $name = 'Davide Mucci';
    $job = 'Junior Full Stack Web Developer';
    return view('home', compact('name', 'job'));
});

Route::get('/about-me', function () {
    return view('about-me');
})-> name ('about-me');

Route::get('/portfolio', function () {
    $id = 4;
    $name = 'Davide Mucci';
    $job = 'Junior Full Stack Web Developer';
    return view('portfolio', compact('name', 'job'));
})-> name ('portfolio');

Route::get('/contacts', function () {
    return view('contacts');
})-> name ('contacts');



