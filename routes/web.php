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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');
Route::get('inactive/{id}', 'UserController@setInactiveUser')->name('inactivate-user');
Route::get('active/{id}', 'UserController@setActiveUser')->name('active-user');
Route::resource('inmuebletype', 'InmuebletypeController');
Route::resource('operationtype', 'OperationtypeController');
Route::resource('equipament', 'EquipamentController');
Route::resource('area', 'AreaController');
Route::resource('detail', 'DetailController');
Route::resource('property', 'PropertyController');
Route::resource('country', 'CountryController');
