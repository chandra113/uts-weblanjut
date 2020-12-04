<?php

namespace App\Controllers;

use App\Models\DummyBookModel;

class Books extends BaseController
{
	protected $dummyBookModel;

	public function __construct()
	{
		$this->dummyBookModel = new DummyBookModel();
	}

	public function index()
	{
		$book = $this->dummyBookModel->findAll();

		$data = [
			'title' => 'SIPUS | Available Books',
			'book' => $book
		];


		return view('books/index', $data);
	}

	//--------------------------------------------------------------------

}
