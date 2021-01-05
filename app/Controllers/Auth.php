<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
	protected $usersModel;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}

	public function login()
	{
		$data = [
			'title' => 'SIPUS | Login',
		];
		return view('auth/login', $data);
	}

	public function authLogin()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$row = $this->usersModel->getLogin($username);

		if ($row == NULL) {
			return redirect()->to('/auth/login')->withInput()->with('errlog', 'Username Salah');
		}
		if ($password == $row->password) {
			$data = [
				'login' => TRUE,
				'fullname' => $row->fullname,
				'username' => $row->username,
				'role' => $row->role
			];

			session()->set($data);
			session()->setFlashdata('msg', 'Berhasil login');
		}
		return redirect()->to('/auth/login')->withInput()->with('errlog', 'Password Salah');
	}

	public function register()
	{
		$data = [
			'title' => 'SIPUS | Register',
			'validation' => \config\services::validation()
		];

		return view('/auth/register', $data);
	}

	public function saveRegister()
	{
		$rules = [
			'fullname' => 'required',
			'email' => 'required|is_unique[users.email]',
			'username' => 'required|is_unique[users.username]',
			'password' => 'required'
		];

		if ($this->validate($rules)) {
			$this->usersModel->insert([
				'fullname' => $this->request->getVar('fullname'),
				'email' => $this->request->getVar('email'),
				'username' => $this->request->getVar('username'),
				'password' => $this->request->getVar('password'),
				//will add hash later, https://youtu.be/ryLg-EhgmJc?t=1860
				'role' => 2
			]);

			session()->setFlashdata('msg', 'Akun telah terdaftar');

			return redirect()->to('/auth/login');
		} else {
			$validator = \Config\Services::validation();
			return redirect()->to('/auth/register')->withInput()->with('validation', $validator);
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth/login');
	}

	//tolong kasih base_url di depan login_assets kalo
	//udah kelar, makasih :)

	//--------------------------------------------------------------------

}
