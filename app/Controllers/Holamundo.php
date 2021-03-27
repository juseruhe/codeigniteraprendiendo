<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Holamundo extends BaseController
{
	public function index()
	{

		$estructura = view('estructura/header').view('estructura/body');
		
		return $estructura;

		
	}
}
