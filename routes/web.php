<?php

Route::post('test','ApiController@test')->name('rrr');
Route::get('test1','ApiController@cities')->name('rrer');


Route::get('/','ViewsController@index')->name('index');
Route::get('login','ViewsController@login')->name('login');
Route::get('flights','ViewsController@flights')->name('flights');
