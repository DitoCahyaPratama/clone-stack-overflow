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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/list','QuestController@ShowList');
Route::get('/list/create','QuestController@ShowCreate');
Route::post('/list','QuestController@CreateQuest');
Route::get('/list/{id}', 'QuestController@DetailQuest');
Route::get('/list/{id}/edit', 'QuestController@ShowEdit');
Route::put('/list/{id}', 'QuestController@EditQuest');
Route::delete('/list/{id}', 'QuestController@DeleteQuest');
