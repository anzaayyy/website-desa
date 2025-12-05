<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class PengaduanController extends BaseController
{
    protected $pengaduanModel;

    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $pengaduan = $this->pengaduanModel
            ->select('tb_pengaduan.*, tb_kategori_pengaduan.nama_kategori')
            ->join('tb_kategori_pengaduan', 'tb_kategori_pengaduan.id_kategori_pengaduan = tb_pengaduan.id_kategori_pengaduan', 'left')
            ->orderBy('tb_pengaduan.id_pengaduan', 'DESC')
            ->findAll();

        // Ambil daftar kategori
        $kategoriModel = new \App\Models\KategoriPengaduanModel();
        $kategori = $kategoriModel->orderBy('id_kategori_pengaduan', 'ASC')->findAll();

        $data = [
            'title'     => 'Manajemen Pengaduan Masyarakat',
            'pengaduan' => $pengaduan,
            'kategori'  => $kategori
        ];

        return view('admin/pengaduan/index', $data);
    }


    public function kategori_store()
    {
        $kategoriModel = new \App\Models\KategoriPengaduanModel();

        $kategoriModel->save([
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ]);

        return redirect()->to('/admin/pengaduan')->with('success', 'Kategori berhasil ditambahkan!');
    }
}
