<?php

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




//Route::get('/', function(){
//    $people = ['jon', 'som', 'rom'];
//    return view('welcome', compact('people'));
//});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/cards', 'CardsController@index');
// Method 1: to show individual cards by using card_id in the url
Route::get('/cards/{card}', 'CardsController@show');

//POST request
//method 1
//Route::post('/cards/{card}/notes', 'CardControllers@addNote');

//method 2
Route::post('/cards/{card}/notes', 'NotesController@store');

//method 3
