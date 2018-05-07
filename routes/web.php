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
Route::get('panel/preregistro/paginar/{n}','controllerPreRegistro@pagination')->name('prePaginar');
Route::post('panel/preregistro/buscar','controllerPreRegistro@search')->name('preBuscar');
Route::resource('panel/preregistro','controllerPreRegistro');
Route::get('panel/categoria/paginar/{n}','controllerCategoria@pagination')->name('catPaginar');
Route::post('panel/categoria/buscar','controllerCategoria@search')->name('catBuscar');
Route::resource('panel/categoria','controllerCategoria');
Route::get('panel/equipo/paginar/{n}','controladorEquipo@pagination')->name('equPaginar');
Route::post('panel/equipo/buscar','controladorEquipo@search')->name('equBuscar');
Route::resource('panel/equipo','controladorEquipo');
Route::get('panel/actividades/paginar/{n}','controladorActividades@pagination')->name('actPaginar');
Route::post('panel/actividades/buscar','controladorActividades@search')->name('actBuscar');
Route::resource('panel/actividades','controladorActividades');
Route::resource('panel/ciudad','controladorCiudad');
Route::resource('panel/pais','controladorPais');
Route::resource('panel/productos','controllerProductos');
Route::get('panel/empresas/paginar/{n}','controllerEmpresa@pagination')->name('emPaginar');
Route::post('panel/empresas/buscar','controllerEmpresa@search')->name('emBuscar');
Route::resource('panel/empresas','controllerEmpresa');
Route::get('panel/email/paginar/{n}','controllerEmail@pagination')->name('mailPaginar');
Route::post('panel/email/buscar','controllerEmail@search')->name('mailBuscar');
Route::resource('panel/email','controllerEmail');
Route::get('panel/usuarios/paginar/{n}','controllerUsuario@pagination')->name('usuPaginar');
Route::post('panel/usuarios/buscar','controllerUsuario@search')->name('usuBuscar');
Route::resource('panel/usuarios','controllerUsuario');
Route::resource('panel/institucion','controllerInstitucion');
Route::get('panel','controllerPanel@startAdmin')->name('start-a');

