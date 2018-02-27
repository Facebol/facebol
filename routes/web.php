<?php
// pagina principal
Route::get('/','controllerInicio@inicio')->name('inicio');
//envio de emails de la pagina principal
Route::post('suscribir','controllerInicio@suscribir')->name('suscribir');
Route::post('email_post','controllerInicio@emailPost')->name('email_post');