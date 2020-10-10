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

Route::get('/', 'TestsController@index');
Route::get('numbers', 'TestsController@numbers')->name('numbers');
Route::get('numbers-2', 'TestsController@numbers2')->name('numbers-2');
Route::get('go-numbers', function()
{
    return redirect()->route('numbers')
        ->with('message', 'To numbers() from routes');
})->name('go-numbers');
