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

Route::get('/', function () {
    return view('welcome');
});

Route::get('{n}', function($n){ 
    return 'Je suis la page '.$n.' !'; 
})->where('n', '[1-3]');

Route::get('salut', function(){
    return "Salut les gens !";
});

/*Grouper des routes */
Route::group(['prefix'=> 'admin', 'middleware'=> 'ip'], function(){
    Route::get('salutation', function(){
        return 'Salut les gens';
    });
});


/* Façade + route + parametre :: condition par Regex*/
Route::get('salut/{slug}-{id}', ['as' => 'salut' , function($slug, $id){
    return "Lien: " . route('salut', ['slug'=>$slug, 'id' => $id]);
}])->where('slug', '[a-zA-Z0-9\-]+')->where('id', '[0-9]+'); 