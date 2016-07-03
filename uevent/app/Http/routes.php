<?php
Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/','pageController@index');
Route::get('Home','pageController@index');
Route::get('/about','pageController@about');
Route::get('/login','loginController@login');
Route::get('/register','loginController@register');
Route::get('logout','logincontroller@logout');

Route::post('/loginauth','logincontroller@loginauth');
Route::post('/register_auth','logincontroller@register_auth');

Route::group(['middleware' => ['web']], function () {
	// Route::resource('grouptest/posts', 'Admin\\PostsController');
	
	
	

});
Route::get('/eventdetail/{eventname}', function ($eventname) {
    return view('page.eventdetail',['eventname'=>$eventname]);
});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('create_user','usercontroller@create_users');
	Route::get('events','pageController@event');
	Route::get('event/detail','pageController@eventdetail');
	Route::get('showuser','usercontroller@get_users');
});