<?php

Route::get('/', function(){
  return view('welcome');
});

Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostrar/{id}','ProdutoController@mostrar')->where('id','[0-9]+');
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adicionar','ProdutoController@adicionar');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/download', 'ProdutoController@downloadFile');
