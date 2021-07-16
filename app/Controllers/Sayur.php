<?php

namespace App\Controllers;

use App\Models\SayurModel;

class Sayur extends BaseController
{
    protected $sayurModel;
    public function __construct()
    {
        $this->sayurModel = new SayurModel();
    }
    public function index()
    {
        // $sayur = $this->sayurModel->findAll();
        $data = [
            'title' => 'Daftar Sayur',
            'sayur' => $this->sayurModel->getSayur()
        ];

        // $sayurModel = new SayurModel();

        return view('/user/sayur', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Sayur',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/createSayur', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[sayur.nama]',
                'errors' => [
                    'required' => '{field} Sayur Harus Diisi',
                    'is_unique' => '{field} Sayur Sudah Terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpeg,image/jpg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Sayur/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/sayur')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        // jika tidak ada gambar maka gambar default
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // generete name gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan kefolder img
            $fileGambar->move('img/sayur', $namaGambar);
            // ambil nama filegambarnya
            // $namaSampul = $fileSampul->getName();
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->sayurModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Ditambahkan.');

        return redirect()->to('/admin/sayur');
    }

    // -------------------------------------------------------------------------------------------

    public function dataSayur()
    {
        // $sayur = $this->sayurModel->findAll();
        $data = [
            'title' => 'Daftar Sayur',
            'sayur' => $this->sayurModel->getSayur()
        ];

        // $sayurModel = new SayurModel();

        return view('/admin/sayur', $data);
    }

    public function detailSayur($slug)
    {
        $data = [
            'title' => 'Detail Sayur',
            'sayur' => $this->sayurModel->getSayur($slug)
        ];

        if (empty($data['sayur'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Sayur' . $slug . 'Tidak Ditemukan');
        }

        return view('/admin/detailSayur', $data);
    }

    public function editSayur($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Sayur',
            'validation' => \Config\Services::validation(),
            'sayur' => $this->sayurModel->getSayur($slug)
        ];
        return view('/admin/editSayur', $data);
    }

    public function deleteSayur($id)
    {
        // cari berdasarkan id
        $sayur = $this->sayurModel->find($id);

        // juka gambarnya bukan default maka hapus gambar
        if ($sayur['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/sayur/' . $sayur['gambar']);
        }

        $this->sayurModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus.');
        return redirect()->to('/admin/sayur');
    }

    public function updateSayur($id)
    {
        //     $sayurLama = $this->sayurModel->getSayur($this->request->getVar('slug'));
        //     if ($sayurLama['nama'] == $this->request->getVar('nama')) {
        //         $rule_nama = 'required';
        //     } else {
        //         $rule_nama = 'required|is_unique[sayur.nama]';
        //     }

        //     if (!$this->validate([
        //         'nama' => [
        //             'rules' => $rule_nama,
        //             'errors' => [
        //                 'required' => '{field} Sayur Harus Diisi',
        //                 'is_unique' => '{field} Sayur Sudah Terdaftar'
        //             ]
        //         ],
        //         'sampul' => [
        //             'rules' => 'max_size[sampul,2048]|is_image[sampul]|mime_in[sampul,image/jpeg,image/jpg,image/png]',
        //             'errors' => [
        //                 'max_size' => 'ukuran gambar terlalu besar',
        //                 'is_image' => 'yang anda pilih bukan gambar',
        //                 'mime_in' => 'yang anda pilih bukan gambar'
        //             ]
        //         ]
        //     ])) {

        //         return redirect()->to('/admin/detailSayur/edit/' . $this->request->getVar('slug'))->withInput();
        //     }

        $fileGambar = $this->request->getFile('gambar');
        // cek gambar, berubah atau tidak
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $gambarLama = $this->request->getVar('gambarLama');
            // upload gambar dan pindahkan
            $fileGambar->move('img/sayur', $namaGambar);
            // hapus file lama
            unlink('img/sayur/' . $gambarLama);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->sayurModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'type' => $this->request->getVar('type'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/admin/sayur');
    }
}
