<?php

Route::get('/', 'PostsController@index');
Route::get('/qui_somme_nous', 'PostsController@qui_somme_nous');
Route::get('/notre_vision', 'PostsController@notre_vision');


Route::get('/realisations', 'PostsController@realisations');


Route::get('/produits', 'ProduitsController@index');
Route::get('/produits/show/{n}', 'ProduitsController@show')->where('n', '[0-9]+');
Route::get('/produits/smartop', 'PostsController@smartop');
Route::get('/produits/bravabox', 'PostsController@bravabox');
