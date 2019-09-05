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

Route::get('/questions', 'QuestionController@index')->name('questions.index');

Route::post('/questions', 'QuestionController@store')->name('questions.store');

Route::get('/questions/create', 'QuestionController@create')->name('questions.create');

Route::get('/questions/{question}', 'QuestionController@show')->name('questions.show');

Route::put('/questions/{question}', 'QuestionController@update')->name('questions.update');

Route::delete('/questions/{question}', 'QuestionController@destroy')->name('questions.destroy');

Route::get('/questions/{question}/edit', 'QuestionController@edit')->name('questions.edit');

