<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use App\Database\Seeds\UsersSeeder;

class MakeSeeders extends Seeder
{
	public function run()
	{
		

		$this->call(UsersSeeder::class);



	}
}
