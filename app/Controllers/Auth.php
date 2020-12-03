<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		echo view('hf/login_header');
		echo view('hf/footer');
		return view('auth/login');
	}

	//--------------------------------------------------------------------

}