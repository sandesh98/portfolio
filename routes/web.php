<?php

Route::namespace('Website')->group(function() {

    Route::prefix('project')->name('project.')->group(function() {

        Route::get('/', 'ProjectsController@index')->name('index');
        Route::get('/sandesh', 'ProjectsController@sandesh')->name('sandesh');
        Route::get('/csr', 'ProjectsController@csr')->name('csr');
        Route::get('/dutchdiner', 'ProjectsController@dutchdiner')->name('dutchdiner');
        Route::get('/technischedienst', 'ProjectsController@technischedienst')->name('technischedienst');
        Route::get('/natraj-flyer', 'ProjectsController@natrajFlyer')->name('natraj-flyer');
        Route::get('/guess-and-win', 'ProjectsController@guessAndWin')->name('guess-and-win');

    });

    Route::name('contact.')->group(function() {
        Route::get('/contact', 'ContactController@index')->name('index');
        Route::post('/contact', 'ContactController@store')->name('store');
    });

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/profile', 'ProfileController@index')->name('profile.index');

});

Auth::routes();