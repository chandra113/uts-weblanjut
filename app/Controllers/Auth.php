<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		$data = [
			'title' => 'SIPUS | Login'
		];
		return view('auth/login', $data);
	}

	public function register()
	{
		$data = [
			'title' => 'SIPUS | Register'
		];
		return view('auth/register', $data);
	}

	//--------------------------------------------------------------------

}
