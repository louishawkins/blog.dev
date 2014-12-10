<?php

class UserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		/*$user = new User();
		$user->email    = $_ENV['DEFAULT_USER'];
		$user->password = $_ENV['DEFAULT_PASS'];
		$user->role_id  = '1';
		$user->save();*/

		$user2 = new User();
		$user2->email    = 'guest@guest.com';
		$user2->password = 'guest';
		$user2->role_id  = '0';
		$user2->save();
	}
}