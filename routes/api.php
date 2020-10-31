<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Countries
Route::prefix('countries')->group(function () {
    Route::get('/', 'CountryController@index');
    Route::get('/{code}', 'CountryController@single');
});

// Regions
Route::prefix('regions')->group(function () {
    Route::get('/', 'RegionController@index');
    Route::get('/{id}', 'RegionController@single');
});

// Counties
Route::prefix('counties')->group(function () {
    Route::get('/', 'CountyController@index');
    Route::get('/{id}', 'CountyController@single');
});

// Cities
Route::prefix('cities')->group(function () {
    Route::get('/', 'CityController@index');
    Route::get('/{id}', 'CityController@single');
});
