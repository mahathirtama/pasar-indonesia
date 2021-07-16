<?php

namespace App\Controllers;

use App\Models\BeliModel;
use App\Models\SayurModel;
use App\Models\DagingModel;
use App\Models\BuahModel;
use App\Models\BeliDeshModel;
use App\Models\AlamatModel;

class Beli extends BaseController
{

    protected $beliModel;
    protected $dagingModel;
    protected $buahModel;
    protected $sayurModel;
    protected $beliDesh;
    protected $alamatModel;
    public function __construct()
    {
        $this->beliModel = new BeliModel();
        $this->sayurModel = new SayurModel();
        $this->dagingModel = new DagingModel();
        $this->buahModel = new BuahModel();
        $this->beliDesh = new BeliDeshModel();
        $this->alamatModel = new AlamatModel();
    }

    public function sayur($slug)
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Beli Sayur',
            'sayur' => $this->sayurModel->getSayur($slug),
            'alamat' => $alamat->paginate(4, 'beli'),
            'pager' => $this->alamatModel->pager,
            'iniPage' => $iniPage
        ];
        return view('/beli/sayur', $data);
    }

    public function save()
    {
        $this->beliModel->save([
            'username' => $this->request->getVar('username'),
            'harga' => $this->request->getVar('harga'),
            'pasar' => $this->request->getVar('pasar'),
            'pembelian' => $this->request->getVar('pembelian'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'alamat' => $this->request->getVar('alamat'),
            'jumlah' => $this->request->getVar('jumlah'),
            'item' => $this->request->getVar('item')
        ]);

        $this->beliDesh->save([
            'username' => $this->request->getVar('username'),
            'harga' => $this->request->getVar('harga'),
            'pasar' => $this->request->getVar('pasar'),
            'pembelian' => $this->request->getVar('pembelian'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'jumlah' => $this->request->getVar('jumlah'),
            'item' => $this->request->getVar('item'),
        ]);


        session()->setFlashdata('pesan', 'Berhasil Membeli');

        return redirect()->to('/catatan');
    }

    public function daging($slug)
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Beli Daging',
            'daging' => $this->dagingModel->getDaging($slug),
            'alamat' => $alamat->paginate(4, 'beli'),
            'pager' => $this->alamatModel->pager,
            'iniPage' => $iniPage
        ];
        return view('/beli/daging', $data);
    }

    public function buah($slug)
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Beli Daging',
            'buah' => $this->buahModel->getBuah($slug),
            'alamat' => $alamat->paginate(4, 'beli'),
            'pager' => $this->alamatModel->pager,
            'iniPage' => $iniPage

        ];
        return view('/beli/buah', $data);
    }

    //--------------------------------------------------------------------

}
