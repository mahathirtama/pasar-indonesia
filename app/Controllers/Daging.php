<?php

namespace App\Controllers;

use App\Models\DagingModel;

class Daging extends BaseController
{
    protected $dagingModel;
    public function __construct()
    {
        $this->dagingModel = new DagingModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Daftar Daging',
            'daging' => $this->dagingModel->getDaging()
        ];

        // $sayurModel = new SayurModel();

        return view('/user/daging', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Daging',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/createDaging', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[daging.nama]',
                'errors' => [
                    'required' => '{field} daging Harus Diisi',
                    'is_unique' => '{field} daging Sudah Terdaftar'
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

            return redirect()->to('/admin/daging')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        // jika tidak ada gambar maka gambar default
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // generete name gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan kefolder img
            $fileGambar->move('img/daging', $namaGambar);
            // ambil nama filegambarnya
            // $namaSampul = $fileSampul->getName();
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->dagingModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'type' => $this->request->getVar('type'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Ditambahkan.');

        return redirect()->to('/admin/daging');
    }

    // ---------------------------------------------------------------------------------

    public function dataDaging()
    {

        $data = [
            'title' => 'Daftar Daging',
            'daging' => $this->dagingModel->getDaging()
        ];

        // $sayurModel = new SayurModel();

        return view('/admin/daging', $data);
    }


    public function detailDaging($slug)
    {
        $data = [
            'title' => 'Detail Daging',
            'daging' => $this->dagingModel->getDaging($slug)
        ];

        if (empty($data['daging'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Daging' . $slug . 'Tidak Ditemukan');
        }

        return view('/admin/detailDaging', $data);
    }

    public function editDaging($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Daging',
            'validation' => \Config\Services::validation(),
            'daging' => $this->dagingModel->getDaging($slug)
        ];
        return view('/admin/editDaging', $data);
    }

    public function deleteDaging($id)
    {
        // cari berdasarkan id
        $daging = $this->dagingModel->find($id);

        // juka gambarnya bukan default maka hapus gambar
        if ($daging['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/daging/' . $daging['gambar']);
        }

        $this->dagingModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus.');
        return redirect()->to('/admin/daging');
    }

    public function updateDaging($id)
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
            $fileGambar->move('img/daging', $namaGambar);
            // hapus file lama
            unlink('img/daging/' . $gambarLama);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->dagingModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'type' => $this->request->getVar('type'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'tgldatang' => $this->request->getVar('tgldatang'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/admin/daging');
    }
}
