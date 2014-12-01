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
    $random = mt_rand(1,6);

    if($random == $guess){
        $output = "Your guess matched! Congratulations";
    } else {
        $output = "Your guess didn't match. Better luck next time!";
    }

    $data = array('guess'  => $guess,
                  'random' => $random,
                  'output' => $output
                );
    return View::make('roll-dice')->with($data);
});

Route::get('/resume', function()
{
	//return View::make('hello');
    return "This will be my resume page.";
});

Route::get('/portfolio', function()
{
    return "This will show my portfolio.";
});
    
