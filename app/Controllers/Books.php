<?php

namespace App\Controllers;


class Books extends BaseController
{

	public function index()
	{
		$bookSearch = $this->request->getVar('search');

		if ($bookSearch) {
			$book = $this->dummyBookModel->search($bookSearch);
		} else {
			$book = $this->dummyBookModel;
		}

		$data = [
			'title' => 'SIPUS | Home',
			'book' => $book->findAll()
		];
		return view('books/index', $data);
	}

	//--------------------------------------------------------------------

}
