<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\User;

class Holamundo extends BaseController
{
	public function index()
	{

      $users= new User($db);

	  $user= $users->findAll();

       $user= array("users" => $user);


		$estructura = view('estructura/header').view('estructura/body',$user);
		
		return $estructura;

		
	}
}
