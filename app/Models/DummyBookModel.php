<?php

namespace App\Models;

use CodeIgniter\Model;

class DummyBookModel extends Model
{
    protected $table = 'books';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['sampul', 'judul', 'slug', 'pengarang', 'kode'];

    public function getBooks($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($bookSearch)
    {
        return $this->table('books')->like('judul', $bookSearch)->orLike('slug', $bookSearch);
    }
}
