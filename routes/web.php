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
    return view('welcome');
});

Route::prefix('shools')->group(function() {

    Route::get('', 'App\Http\Controllers\ShoolController@index')->name('shool.index');
    Route::get('create', 'App\Http\Controllers\ShoolController@create')->name('shool.create');
    Route::post('store', 'App\Http\Controllers\ShoolController@store')->name('shool.store');
    Route::get('edit/{shool}', 'App\Http\Controllers\ShoolController@edit')->name('shool.edit');
    Route::post('update/{shool}', 'App\Http\Controllers\ShoolController@update')->name('shool.update');
    Route::post('destroy/{shool}', 'App\Http\Controllers\ShoolController@destroy')->name('shool.destroy');
    Route::get('show/{shool}', 'App\Http\Controllers\ClientController@show')->name('shool.show');
});
Route::prefix('students')->group(function() {

    Route::get('', 'App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    Route::post('store', 'App\Http\Controllers\StudentController@store')->name('student.store');
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    Route::post('destroy/{student}', 'App\Http\Controllers\StudentController@destroy')->name('student.destroy');
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');
});
