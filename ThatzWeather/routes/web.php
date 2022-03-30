<?php

//use Illuminate\Support\Facades\Route;

//Route::get('/', 'CitiesController@index');    ISN'T WORK
//Route::get('/', [CitiesController::class, 'index']);  ISN'T WORK

Route::get('/', 'App\Http\Controllers\CitiesController@index');
Route::get('posts/{id}', 'App\Http\Controllers\CitiesController@show');