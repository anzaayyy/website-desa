<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\APBDesModel;
use App\Models\PendapatanDesaModel;
use App\Models\PembiayaanDesaModel;

class ApbdesController extends BaseController
{
    protected $apbdes;
    protected $pendapatan;
    protected $pembiayaan;

    public function __construct()
    {
        $this->apbdes      = new APBDesModel();
        $this->pendapatan  = new PendapatanDesaModel();
        $this->pembiayaan  = new PembiayaanDesaModel();
    }

    /* ============================================================
     *                  CRUD APBDES (DATA UTAMA)
     * ============================================================ */

    public function index()
    {
        $data = [
            'title'       => 'Data APBDes',
            'apbdes'      => $this->apbdes->orderBy('id_apbdes', 'DESC')->findAll(),
            'pendapatan'  => $this->pendapatan->orderBy('urutan', 'ASC')->findAll(),
            'pembiayaan'  => $this->pembiayaan->orderBy('urutan', 'ASC')->findAll(),
        ];

        return view('admin/apbdes/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data APBDes',
        ];

        return view('admin/apbdes/create', $data);
    }

    public function store()
    {
        $this->apbdes->save([
            'tahun'            => $this->request->getPost('tahun'),
            'deskripsi'        => $this->request->getPost('deskripsi'),
            'total_pendapatan' => $this->request->getPost('total_pendapatan'),
            'total_belanja'    => $this->request->getPost('total_belanja'),
            'total_pembiayaan' => $this->request->getPost('total_pembiayaan'),
            'silpa'            => $this->request->getPost('silpa'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Data APBDes berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $row = $this->apbdes->find($id);

        if (!$row) {
            return redirect()->to('/admin/apbdes')->with('error', 'Data APBDes tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Data APBDes',
            'row'   => $row,
        ];

        return view('admin/apbdes/edit', $data);
    }

    public function update($id)
    {
        $this->apbdes->update($id, [
            'tahun'            => $this->request->getPost('tahun'),
            'deskripsi'        => $this->request->getPost('deskripsi'),
            'total_pendapatan' => $this->request->getPost('total_pendapatan'),
            'total_belanja'    => $this->request->getPost('total_belanja'),
            'total_pembiayaan' => $this->request->getPost('total_pembiayaan'),
            'silpa'            => $this->request->getPost('silpa'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Data APBDes berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->apbdes->delete($id);

        return redirect()->to('/admin/apbdes')->with('success', 'Data APBDes berhasil dihapus!');
    }

    /* ============================================================
     *           CRUD PENDAPATAN DESA (DALAM HALAMAN APBDES)
     * ============================================================ */

    public function pendapatan_store()
    {
        $this->pendapatan->save([
            'kategori'   => $this->request->getPost('kategori'),
            'jumlah'     => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'urutan'     => $this->request->getPost('urutan'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Pendapatan Desa berhasil ditambahkan!');
    }

    public function pendapatan_update($id)
    {
        $this->pendapatan->update($id, [
            'kategori'   => $this->request->getPost('kategori'),
            'jumlah'     => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'urutan'     => $this->request->getPost('urutan'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Pendapatan Desa berhasil diupdate!');
    }

    public function pendapatan_delete($id)
    {
        $this->pendapatan->delete($id);

        return redirect()->to('/admin/apbdes')->with('success', 'Pendapatan Desa berhasil dihapus!');
    }

    /* ============================================================
     *          CRUD PEMBIAYAAN DESA (DALAM HALAMAN APBDES)
     * ============================================================ */

    public function pembiayaan_store()
    {
        $this->pembiayaan->save([
            'uraian'     => $this->request->getPost('uraian'),
            'jumlah'     => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'urutan'     => $this->request->getPost('urutan'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Pembiayaan Desa berhasil ditambahkan!');
    }

    public function pembiayaan_update($id)
    {
        $this->pembiayaan->update($id, [
            'uraian'     => $this->request->getPost('uraian'),
            'jumlah'     => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'urutan'     => $this->request->getPost('urutan'),
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Pembiayaan Desa berhasil diupdate!');
    }

    public function pembiayaan_delete($id)
    {
        $this->pembiayaan->delete($id);

        return redirect()->to('/admin/apbdes')->with('success', 'Pembiayaan Desa berhasil dihapus!');
    }
}
