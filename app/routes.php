<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('hello');
});
/*
Route::get('users', function()
{
	//ここでDBから情報GET
	$users = User::all();
	var_dump($users);
	return View::make('users')->with('users',$users);
//	return View::make('users')->with('id',$users);

});
*/
Route::get('user/{name?}', function($name = null)
{
	return $name;
});

Route::get('foo/bar', function()
{
	$url = URL::to('foo');
	return $url;
});
//証明書がないからまだむりぽ
/*
Route::get('foo', array('https', function()
{
return 'Must be over HTTPS';
}));

*/


