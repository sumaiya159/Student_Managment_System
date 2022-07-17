<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;




Route::get('/', function () {
    return view('welcome');
});

// Route::resource('products',StudentController::class);
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
Route::get('/',"StudentController@index");
