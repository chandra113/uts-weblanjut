<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'role'];

    public function getLogin($username)
    {
        $builder = $this->table('users');
        $builder->where('username', $username);
        $log = $builder->get()->getRow();
        return $log;
    }
    //added comment, again.
}
