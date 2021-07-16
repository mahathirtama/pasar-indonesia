<?php

namespace App\Models;

use CodeIgniter\Model;

class DagingModel extends Model
{
    protected $table = 'daging';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'tgldatang', 'type', 'harga', 'gambar'];

    public function getDaging($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
