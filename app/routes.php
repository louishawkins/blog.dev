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

Route::get('/sayhello/{name}', function($name)
{
    $data = array('name' => $name);
    return View::make('my-first-view')->with($data);
});


Route::get('/rolldice/{guess}', function($guess)
{
    $roll = mt_rand(1,6);

    $data = array('guess'  => $guess,
                  'roll'   => $roll,
                );
    return View::make('rolldice', $data);
});

Route::get('/resume', function()
{
	//return View::make('hello');
    return "This will be my resume page.";
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});
    
