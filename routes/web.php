<?php
// pagina principal
Route::get('/','controllerInicio@inicio')->name('inicio');
//envio de emails de la pagina principal
Route::post('suscribir','controllerInicio@suscribir')->name('suscribir');
Route::post('email_post','controllerInicio@emailPost')->name('email_post');

Route::get('login','controllerLogin@start')->name('start');
Route::post('log','controllerLogin@log')->name('log');
Route::get('logout','controllerLogin@logout')->name('logout');
//panel
Route::resource('panel/empresas','controllerEmpresa');
Route::resource('panel/usuarios','controllerUsuario');
Route::resource('panel/institucion','controllerInstitucion');
Route::get('panel','controllerPanel@startAdmin')->name('start-a');
Route::get('panel-c','controllerPanel@startCurrier')->name('start-c');
