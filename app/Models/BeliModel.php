<?php

namespace App\Models;

use CodeIgniter\Model;

class BeliModel extends Model
{
    protected $table = 'beli';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'type', 'alamat', 'pasar', 'tgldatang', 'harga', 'gambar', 'pembelian', 'item', 'jumlah'];

    public function getBeli()
    {

        return $this->findAll();
    }



    public function riwayat($username)
    {
        return $this->table('beli')->like('username', $username);
    }
}
