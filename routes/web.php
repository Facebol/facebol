<?php
// pagina principal
Route::get('empresa/{id}','controllerInicio@detalleEmpresa')->name('detalleEmpresa');
Route::get('noticia','controllerInicio@noticia')->name('noticia');
Route::post('preregistro','controllerInicio@preRegistro')->name('preregistro');
Route::get('equipo','controllerInicio@equipo')->name('equipo');
Route::get('empresa','controllerInicio@empresa')->name('empresa');
Route::get('categoria/{id}','controllerInicio@categoria')->name('categoria');
Route::get('actividad','controllerInicio@actividad')->name('actividad');
Route::get('contacto','controllerInicio@contactanos')->name('contactanos');
Route::get('/','controllerInicio@inicio')->name('inicio');
//envio de emails de la pagina principal
Route::post('suscribir','controllerInicio@suscribir')->name('suscribir');
Route::post('email_post','controllerInicio@emailPost')->name('email_post');


Route::post('log','controllerLogin@log')->name('log');
Route::get('logout','controllerLogin@logout')->name('logout');
Route::post('reset/password/save','controllerInicio@passwordSave')->name('passwordSave');
Route::get('reset/password/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
Route::post('reset','controllerInicio@emailReset')->name('reset');

Route::get('panel/reset/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
Route::resource('panel/planes','controllerPlanes');
Route::resource('panel/categoria','controladorEquipo');
Route::resource('panel/equipo','controladorEquipo');
Route::resource('panel/actividades','controladorActividades');
Route::resource('panel/ciudad','controladorCiudad');
Route::resource('panel/pais','controladorPais');
Route::resource('panel/productos','controllerProductos');
Route::resource('panel/empresas','controllerEmpresa');
Route::resource('panel/email','controllerEmail');
Route::resource('panel/usuarios','controllerUsuario');
Route::resource('panel/institucion','controllerInstitucion');
Route::get('panel','controllerPanel@startAdmin')->name('start-a');