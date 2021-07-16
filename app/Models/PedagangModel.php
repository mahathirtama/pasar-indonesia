<?php

namespace App\Models;

use CodeIgniter\Model;

class PedagangModel extends Model
{
    protected $table = 'pedagang';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'type', 'pasar', 'tgldatang', 'harga', 'gambar', 'pembelian', 'item', 'jumlah'];

    public function getBeli($id)
    {

        return $this->findAll();
    }



    public function riwayat($username)
    {
        return $this->table('pedagang')->like('username', $username);
    }
}
