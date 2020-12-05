<?php

namespace App\Controllers;


class Books extends BaseController
{

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
