<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function authenticate()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/');
		} else {
   			return Redirect::action('HomeController@showLogin');
		}
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showPortfolio');
	}

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', ['Louis']);
	}

	public function sayHello($name){
		$data = array('name' => $name);
		return View::make('hello', $data);
	}

	public function rollDice($guess){
		$roll = mt_rand(1,6);

    	$data = array('guess'  => $guess,
                  	  'roll'   => $roll,
                	 );
    	return View::make('rolldice', $data);
	}

	public function showIndex(){
		return View::make('index');
	}

	public function showResume(){
		return "This will be my resume page.";
	}

}
