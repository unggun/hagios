<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		User::create(array(
			'name'     => 'Hagios Good News',
			'username' => 'admin_hgn',
			'password' => Hash::make('goodnews'),
		));
	}

}
?>