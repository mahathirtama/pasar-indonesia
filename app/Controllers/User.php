<?php

namespace App\Controllers;

use App\Models\AlamatModel;

class User extends BaseController
{
    protected $alamatModel;
    public function __construct()
    {
        $this->alamatModel = new AlamatModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Pasia'
        ];
        // return view('welcome_message');
        return view('user/index', $data);
    }

    public function profile()
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Profile',
            'alamat' => $alamat->paginate(4, 'beli'),
            'pager' => $this->alamatModel->pager,
            'iniPage' => $iniPage
        ];

        return view('user/profile', $data);
    }

    public function alamat()
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Tambah Alamat',
            'alamat' => $alamat->paginate(4, 'beli'),
            'pager' => $this->alamatModel->pager,
            'iniPage' => $iniPage
        ];

        return view('user/alamat', $data);
    }

    public function alamatSave()
    {
        $this->alamatModel->save([
            'username' => $this->request->getVar('username'),
            'kota' => $this->request->getVar('kota'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        return redirect()->to('/profile');
    }

    public function ubah($id)
    {
        $username = user()->username;
        $alamat = $this->alamatModel->alamat($username);
        $iniPage = $this->request->getVar('page_beli') ? $this->request->getVar('page_beli') : 1;
        $data = [
            'title' => 'Ubah Alamat',
            'validation' => \Config\Services::validation(),
            'alamat' => $this->alamatModel->getAlamat($id)
        ];
        return view('/user/ubahAlamat', $data);
    }

    public function updateAlamat($id)
    {
        $this->alamatModel->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'kota' => $this->request->getVar('kota'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/profile');
    }
    public function reset()
    {
        $data = [
            'title' => 'reset'
        ];
        // return view('welcome_message');
        return view('auth/reset', $data);
    }



    //--------------------------------------------------------------------

}
