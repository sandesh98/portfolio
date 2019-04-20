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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/project', 'ProjectsController@index')->name('project.index');
Route::get('/project/chefmarketing', 'ProjectsController@chefmarketing')->name('project.chefmarketing');
Route::get('/project/sandesh', 'ProjectsController@sandesh')->name('project.sandesh');
Route::get('/project/csr', 'ProjectsController@csr')->name('project.csr');
Route::get('/project/dutchdiner', 'ProjectsController@dutchdiner')->name('project.dutchdiner');
Route::get('/project/technischedienst', 'ProjectsController@technischedienst')->name('project.technischedienst');
Route::get('/project/natraj-flyer', 'ProjectsController@natrajFlyer')->name('project.natraj-flyer');
Route::get('project/guess-and-win', 'ProjectsController@guessAndWin')->name('project.guess-and-win');


Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
