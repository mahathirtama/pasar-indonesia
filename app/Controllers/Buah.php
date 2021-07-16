<?php

namespace App\Controllers;

use App\Models\BuahModel;

class Buah extends BaseController
{
    protected $buahModel;
    public function __construct()
    {
        $this->buahModel = new BuahModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Daftar Buah',
            'buah' => $this->buahModel->getBuah()
        ];

        // $sayurModel = new SayurModel();

        return view('/user/buah', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Buah',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/createBuah', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[buah.nama]',
                'errors' => [
                    'required' => '{field} buah Harus Diisi',
                    'is_unique' => '{field} buah Sudah Terdaftar'
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

            return redirect()->to('/admin/buah')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        // jika tidak ada gambar maka gambar default
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // generete name gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan kefolder img
            $fileGambar->move('img/buah', $namaGambar);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->buahModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Ditambahkan.');

        return redirect()->to('/admin/buah');
    }

    // --------------------------------------------------------------------------------
    public function dataBuah()
    {

        $data = [
            'title' => 'Daftar Buah',
            'buah' => $this->buahModel->getBuah()
        ];

        // $sayurModel = new SayurModel();

        return view('/admin/buah', $data);
    }

    public function detailBuah($slug)
    {
        $data = [
            'title' => 'Detail Buah',
            'buah' => $this->buahModel->getBuah($slug)
        ];

        if (empty($data['buah'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Buah' . $slug . 'Tidak Ditemukan');
        }

        return view('/admin/detailBuah', $data);
    }

    public function editBuah($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Sayur',
            'validation' => \Config\Services::validation(),
            'buah' => $this->buahModel->getBuah($slug)
        ];
        return view('/admin/editBuah', $data);
    }

    public function deleteBuah($id)
    {
        // cari berdasarkan id
        $buah = $this->buahModel->find($id);

        // juka gambarnya bukan default maka hapus gambar
        if ($buah['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/buah/' . $buah['gambar']);
        }

        $this->buahModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus.');
        return redirect()->to('/admin/buah');
    }

    public function updateBuah($id)
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
            $fileGambar->move('img/buah', $namaGambar);
            // hapus file lama
            unlink('img/buah/' . $gambarLama);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->buahModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'type' => $this->request->getVar('type'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/admin/buah');
    }
}
