<?php

namespace App\Models;

use CodeIgniter\Model;

class DummyBookModel extends Model
{
    protected $table = 'books';
    protected $useTimestamps = true;
    protected $allowedFields = ['sampul', 'judul', 'slug', 'pengarang', 'kode'];

    public function search($bookSearch)
    {
        return $this->table('books')->like('judul', $bookSearch)->orLike('slug', $bookSearch);
    }
}
