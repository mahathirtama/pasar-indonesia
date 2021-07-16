<?php

namespace App\Models;

use CodeIgniter\Model;

class SayurModel extends Model
{
    protected $table = 'sayur';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'tgldatang', 'type', 'harga', 'gambar'];

    public function getSayur($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
