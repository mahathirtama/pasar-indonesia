<?php

namespace App\Controllers;

use App\Models\BeliDeshModel;
use App\Models\PedagangModel;


class Pedagang extends BaseController
{

    protected $beliDesh;
    protected $pedagang;

    public function __construct()
    {
        $this->beliDesh = new BeliDeshModel();
        $this->order = new PedagangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Orderan',
            'desh' => $this->beliDesh->getBeli(),
        ];
        return view('/pedagang/index', $data);
    }

    public function save($id)
    {
        $this->order->save([
            'username' => $this->request->getVar('username'),
            'harga' => $this->request->getVar('harga'),
            'pasar' => $this->request->getVar('pasar'),
            'pembelian' => $this->request->getVar('pembelian'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'jumlah' => $this->request->getVar('jumlah'),
            'item' => $this->request->getVar('item')
        ]);
        $this->beliDesh->delete($id);

        session()->setFlashdata('pesan', 'Berhasil Membeli');

        return redirect()->to('/catatan');
    }

    public function order($id)
    {
        $data = [
            'title' => "Terima Orderan",
            'terima' => $this->beliDesh->getOrder($id),
        ];
        return view('pedagang/order', $data);
    }

    public function catatan()
    {
        $username = user()->username;
        $catatan = $this->order->riwayat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Catatan Orderan',
            'pedagang' => $catatan->paginate(4, 'pedagang'),
            'pager' => $this->order->pager,
            'iniPage' => $iniPage
        ];

        return view('pedagang/catatan', $data);
    }


    //--------------------------------------------------------------------

}
