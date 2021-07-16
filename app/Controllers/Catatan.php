<?php

namespace App\Controllers;

use App\Models\BeliModel;

class Catatan extends BaseController
{
    protected $beliModel;
    public function __construct()
    {
        $this->beliModel = new BeliModel();
    }
    public function index()
    {
        $username = user()->username;
        $catatan = $this->beliModel->riwayat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;

        $data = [
            'title' => 'Daftar Pembelian',
            'beli' => $catatan->paginate(4, 'beli'),
            'pager' => $this->beliModel->pager,
            'iniPage' => $iniPage
        ];

        return view('/catatan/user', $data);
    }

    public function admin()
    {
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;

        $data = [
            'title' => 'Daftar Pembelian',
            'beli' => $this->beliModel->paginate(4, 'beli'),
            'pager' => $this->beliModel->pager,
            'iniPage' => $iniPage
        ];

        return view('/catatan/admin', $data);
    }

    //--------------------------------------------------------------------

}
