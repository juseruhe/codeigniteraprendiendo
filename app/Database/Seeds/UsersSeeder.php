<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
	public function run()
	{
		
     $datos = ["name" => "Pepito",
	 "email" => "pepito@yahoo.es"
	];


	$this->db->table('users')->insert($datos);


	}
}
