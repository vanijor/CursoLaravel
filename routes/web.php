<?php

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

/**
 * Route to user login
 * __________________________________________________________
 */
Route::post('/login', ['uses' => 'Controller@login'])->name('user.login');
Route::get('/login', ['uses' => 'Controller@fazerLogin']);
