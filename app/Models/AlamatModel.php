<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatModel extends Model
{
    protected $table = 'alamat';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'kota', 'alamat'];

    public function getAlamat()
    {

        return $this->findAll();
    }

    public function alamat($username)
    {
        return $this->table('alamat')->like('username', $username);
    }
}
