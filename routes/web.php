<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(Auth::user() == ""){
		return view('welcome');
	}else {
		return redirect()->route('messages');
	}
    
});

Auth::routes();



Route::get('/messages' , [
	'uses' 		=> 'MessageController@getMessages',
	'as'		=> 'messages'
]);

Route::get('/delete/{id}',[
	'uses'		=>'MessageController@getDeleteMessage',
	'as'		=>'delete'
]);

Route::post('/send',[
	'uses'		=> 'ProfileController@sendMessage',
	'as'		=> 'send'
]);

Route::get('/profile/{name}' , [
	'uses' 		=> 'ProfileController@getProfile',
	'as'		=> 'profile'
]);

Auth::routes();

Route::get('/about', function()
	{
		return view('about');
	});

Route::get('/contact', function()
	{
		return view('contact');
	});
