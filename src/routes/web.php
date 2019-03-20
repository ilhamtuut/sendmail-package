<?php

Route::group(['namespace'=>'Wanka\Contact\Http\Controllers'],function ()
{
	Route::get('/contact', 'ContactController@index')->name('contact');
	Route::post('/contact', 'ContactController@sendMail');
});