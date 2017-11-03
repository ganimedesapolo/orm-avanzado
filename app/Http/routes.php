<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
	$users = AdvancedELOQUENT\User::all();
	return view('manytomany.index', compact('users'));
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|




| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});




Route::get('edit-manytomany/{user_id}', [
	'as' 	=> 'getEdit',
	'uses' 	=> 'UserController@getEditManyToMany'
]);


Route::put('put-manytomany/{user_id}', [
	'as' 	=> 'putEdit',
	'uses' 	=> 'UserController@putEditManyToMany'
]);