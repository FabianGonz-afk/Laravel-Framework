<?php

/* custom routes generated by CRUD */


Route::group(array('prefix' => 'admin/', 'middleware' => 'admin','as'=>'admin.'), function () {

Route::get('ericHongs', ['as'=> 'ericHongs.index', 'uses' => 'EricHongController@index']);
Route::post('ericHongs', ['as'=> 'ericHongs.store', 'uses' => 'EricHongController@store']);
Route::get('ericHongs/create', ['as'=> 'ericHongs.create', 'uses' => 'EricHongController@create']);
Route::put('ericHongs/{ericHongs}', ['as'=> 'ericHongs.update', 'uses' => 'EricHongController@update']);
Route::patch('ericHongs/{ericHongs}', ['as'=> 'ericHongs.update', 'uses' => 'EricHongController@update']);
Route::get('ericHongs/{id}/delete', array('as' => 'ericHongs.delete', 'uses' => 'EricHongController@getDelete'));
Route::get('ericHongs/{id}/confirm-delete', array('as' => 'ericHongs.confirm-delete', 'uses' => 'EricHongController@getModalDelete'));
Route::get('ericHongs/{ericHongs}', ['as'=> 'ericHongs.show', 'uses' => 'EricHongController@show']);
Route::get('ericHongs/{ericHongs}/edit', ['as'=> 'ericHongs.edit', 'uses' => 'EricHongController@edit']);

});
