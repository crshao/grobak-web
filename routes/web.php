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

// Route::get('/', function () {
//     return view('layouts.sidebar_template.sidebar_example');
// });

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bahanbaku', 'BahanBakuController@index');
Route::get('/bahanbaku/create', 'BahanBakuController@create');
Route::get('/bahanbaku/{bahanbaku}', 'BahanBakuController@show');

Route::get('/add-to-cart/{id}', [
    'uses' => 'BahanBakuController@getAddToCart',
    'as' => 'bahanBaku.addToCart'
]);