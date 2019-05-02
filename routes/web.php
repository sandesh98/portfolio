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

Route::get('/', 'Website\HomeController@index')->name('home.index');

Route::get('/project', 'Website\ProjectsController@index')->name('project.index');
//Route::get('/project/chefmarketing', 'ProjectsController@chefmarketing')->name('project.chefmarketing');
Route::get('/project/sandesh', 'Website\ProjectsController@sandesh')->name('project.sandesh');
Route::get('/project/csr', 'Website\ProjectsController@csr')->name('project.csr');
Route::get('/project/dutchdiner', 'Website\ProjectsController@dutchdiner')->name('project.dutchdiner');
Route::get('/project/technischedienst', 'Website\ProjectsController@technischedienst')->name('project.technischedienst');
Route::get('/project/natraj-flyer', 'Website\ProjectsController@natrajFlyer')->name('project.natraj-flyer');
Route::get('project/guess-and-win', 'Website\ProjectsController@guessAndWin')->name('project.guess-and-win');


Route::get('/profile', 'Website\ProfileController@index')->name('profile.index');
Route::get('/contact', 'Website\ContactController@index')->name('contact.index');
Route::post('/contact', 'Website\ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
