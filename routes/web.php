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
Route::get('/aboutus', function() {
    return view('aboutus');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/resep', 'ResepController@index')->name('resep');

//Bahan Baku
Route::get('/bahanbaku', 'BahanBakuController@index')->name('bahanbaku');
Route::get('/bahanbaku/resep-{id}', 'BahanBakuController@getBahanBaku')->name('bahanbaku.get');
Route::get('/bahanbaku/create', 'BahanBakuController@create');
Route::get('/bahanbaku/{bahanbaku}', 'BahanBakuController@show');
Route::post('/bahanbaku', 'BahanBakuController@store');

Route::get('/add-to-cart/{id}', [
    'uses' => 'BahanBakuController@getAddToCart',
    'as' => 'bahanBaku.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'BahanBakuController@getReducedByOne',
    'as' => 'bahanBaku.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'BahanBakuController@getRemoveFromCart',
    'as' => 'bahanBaku.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'BahanBakuController@getCart',
    'as' => 'bahanBaku.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'BahanBakuController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/postcheckout', [
    'uses' => 'BahanBakuController@postCheckout',
    'as' => 'postcheckout'
]);