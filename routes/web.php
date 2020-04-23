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

Route::resource('user', 'UserController');
Route::resource('item', 'ItemController');
Route::get('/itemall', 'ItemController@indexAll')->name('item.all');

Route::resource('itemname', 'ItemnameController');
Route::resource('armor', 'ArmorController');
Route::resource('weapon', 'WeaponController');

Route::resource('recipe', 'RecipeController');
Route::resource('ingredient', 'IngredientController');
Route::resource('weapon-sa', 'WeaponSaController');


Route::get('/', 'UserController@index')->name('home');
