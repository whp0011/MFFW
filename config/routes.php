<?php
/**
 * File name: routes.php
 * Desc: 
 * Author: hp 
 * Date Time: 2015/4/1 14:48
 */
use NoahBuscher\Macaw\Macaw as Route;

Route::get('/www',function(){
	echo 'a';
});
Route::get('/', 'MFFW\Controllers\HomeController@home');

Route::get('(:all)', function($fu) {
	echo '未匹配到路由<br>'.$fu;
});

Route::dispatch();