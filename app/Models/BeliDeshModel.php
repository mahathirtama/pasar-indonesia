<?php

namespace App\Models;

use CodeIgniter\Model;

class BeliDeshModel extends Model
{
    protected $table = 'belidesh';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'type', 'pasar', 'tgldatang', 'harga', 'gambar', 'pembelian', 'item', 'jumlah'];

    public function getBeli()
    {

        return $this->findAll();
    }


    public function getOrder($id)
    {

        return $this->where(['id' => $id])->first();
    }



    public function riwayat($username)
    {
        return $this->table('belidesh')->like('username', $username);
    }
}
