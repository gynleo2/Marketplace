<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/products', 'ProductsController@index');
Route::get('/stores', 'StoresController@index');
Route::get('/users', 'UsersController@index');

