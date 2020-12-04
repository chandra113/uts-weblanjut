<?php

namespace App\Models;

use CodeIgniter\Model;

class DummyBookModel extends Model
{
    protected $table = 'books';
    protected $useTimestamps = true;
}
