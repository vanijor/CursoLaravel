<?php

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

/**
 * Route to user login
 * __________________________________________________________
 */
Route::get('/login', ['uses' => 'Controller@fazerLogin']);
Route::post('/login', ['uses' => 'DashboardController@auth'])->name('user.login');
Route::get('/dashboard', ['uses' => 'DashboardController@index'])->name('user.dashboard');
