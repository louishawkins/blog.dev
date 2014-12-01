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

Route::get('/resume', function()
{
	//return View::make('hello');
    return "This will be my resume page.";
});

Route::get('/portfolio', function()
{
    return "This will show my portfolio.";
});
    
