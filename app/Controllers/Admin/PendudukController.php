<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PendudukModel;

class PendudukController extends BaseController
{
    protected $penduduk;

    public function __construct()
    {
        $this->penduduk = new PendudukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Penduduk',
            'data' => $this->penduduk->orderBy('id_penduduk', 'DESC')->findAll()
        ];
        return view('admin/penduduk/index', $data);
    }

    public function create()
    {
        return view('admin/penduduk/create');
    }

    public function store()
    {
        $validated = $this->validate([
            'nik' => 'required|min_length[10]|max_length[20]|is_unique[tb_penduduk.nik]',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'dusun' => 'required',
        ]);

        if (!$validated) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->penduduk->save($this->request->getPost());
        return redirect()->to('/admin/penduduk')->with('success', 'Data berhasil ditambahkan');
    }

public function edit($id)
{
    $penduduk = $this->penduduk->find($id);

    if (!$penduduk) {
        return redirect()->to('/admin/penduduk')->with('error', 'Data tidak ditemukan');
    }

    return view('admin/penduduk/edit', ['penduduk' => $penduduk]);
}

    public function update($id)
    {
        $penduduk = $this->penduduk->find($id);
        if (!$penduduk) {
            return redirect()->to('/admin/penduduk')->with('error', 'Data tidak ditemukan');
        }

        $validated = $this->validate([
            'nik' => "required|min_length[10]|max_length[20]",
            'nama' => "required",
            'jenis_kelamin' => "required|in_list[L,P]",
            'tanggal_lahir' => "required",
            'dusun' => "required",
            'pekerjaan' => "permit_empty|max_length[100]",
            'status_keluarga' => "required|in_list[Kepala Keluarga,Anggota]"
        ]);

        if (!$validated) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        // Update data
        $this->penduduk->update($id, [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'dusun' => $this->request->getPost('dusun'),
            'alamat' => $this->request->getPost('alamat'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'status_keluarga' => $this->request->getPost('status_keluarga'),
        ]);

        return redirect()->to('/admin/penduduk')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->penduduk->delete($id);
        return redirect()->to('/admin/penduduk')->with('success', 'Data berhasil dihapus');
    }
}
