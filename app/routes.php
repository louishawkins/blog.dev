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

Route::get('/', 'PostsController@index');
Route::get('login', 'HomeController@showLogin');
Route::get('logout', 'HomeController@logout');
Route::post('login', 'HomeController@authenticate');
Route::resource('posts', 'PostsController');

/*
Route::get('orm-test', function()
{
	// find all posts
	$posts = Post::all();

	// $post = Post::find(1); or
	$post = Post::findOrFail(1);

	$posts = Post::with('user')->paginate(3);
	// or $posts = Post::with('user')->get();

	$query = Post::with('user'); 
	$query->where('title', 'like', '%Persistent%');
	$query->orWhere('body', 'like', '%other value%');

	$query->orWhereHas('user', function($q)
	{
		$q->where('email', 'like', '%ben');
	});

	$posts = $query->get();
	$posts = $query->paginate(5);
});
*/