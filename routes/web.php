<?php

Route::get('/', ['uses','Controller@homepage']);
Route::get('/cadastro', ['uses','Controller@cadastrar']);
Route::get('/login', ['uses','Controller@fazerLogin']);
