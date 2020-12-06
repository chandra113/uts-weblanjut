<?php

namespace App\Controllers;


class Admin extends BaseController
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
            'title' => 'SIPUS | Available Books',
            'book' => $book->findAll()
        ];
        return view('admin/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'SIPUS | Tambah Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function edit($slug)
    {

        $data = [
            'title' => 'SIPUS | Ubah Data Buku',
            'validation' => \config\services::validation(),
            'books' => $this->dummyBookModel->getBooks($slug)
        ];

        return view('admin/edit', $data);
    }

    public function save()
    {
        $rules = [
            'sampul' => 'required|is_unique[books.sampul]',
            'judul' => 'required|is_unique[books.judul]',
            'pengarang' => 'required',
            'kode' => 'required|is_unique[books.kode]'
        ];

        if ($this->validate($rules)) {
            //Convert 'judul' to slug
            $slug = url_title($this->request->getVar('judul'), '-', true);

            //Saves the data to the table
            $this->dummyBookModel->save([
                'sampul' => $this->request->getVar('sampul'),
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'pengarang' => $this->request->getVar('pengarang'),
                'kode' => $this->request->getVar('kode')
            ]);

            return redirect()->to('/admin');
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/admin/create')->withInput()->with('validation', $validator);
        }
    }

    public function update($id)
    {
        $rules = [
            'sampul' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kode' => 'required'
        ];

        if ($this->validate($rules)) {
            //Convert 'judul' to slug
            $slug = url_title($this->request->getVar('judul'), '-', true);

            //Saves the data to the table
            $this->dummyBookModel->save([
                'id' => $id,
                'sampul' => $this->request->getVar('sampul'),
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'pengarang' => $this->request->getVar('pengarang'),
                'kode' => $this->request->getVar('kode')
            ]);

            return redirect()->to('/admin');
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validator);
        }
    }

    public function delete($id)
    {
        $this->dummyBookModel->delete($id);
        return redirect()->to('/admin');
    }
    //--------------------------------------------------------------------

}
