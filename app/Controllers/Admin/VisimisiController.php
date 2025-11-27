<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VisimisiModel;

class VisimisiController extends BaseController
{
    protected $visimisiModel;

    public function __construct()
    {
        $this->visimisiModel = new VisimisiModel();
    }

    public function index()
    {
        $data['visimisi'] = $this->visimisiModel->first();
        return view('admin/visimisi/index', $data);
    }

    public function create()
    {
        return view('admin/visimisi/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'visi' => 'required|min_length[3]',
            'misi' => 'required|min_length[3]',
            'gambar' => 'mime_in[gambar,image/jpg,image/jpeg,image/png]|max_size[gambar,2048]'
        ];

        if (!$this->validate($rules)) {
            return view('admin/visimisi/create', [
                'validation' => $this->validator
            ]);
        }

        $model = new \App\Models\VisiMisiModel();

        // Upload gambar (opsional)
        $file = $this->request->getFile('gambar');
        $namaGambar = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaGambar = $file->getRandomName();
            $file->move('assets/img', $namaGambar);
        }

        $model->save([
            'visi'   => $this->request->getPost('visi'),
            'misi'   => $this->request->getPost('misi'),
            'gambar' => $namaGambar
        ]);

        return redirect()->to('/admin/visimisi')->with('success', 'Visi & Misi berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $data['visimisi'] = $this->visimisiModel->find($id);
        return view('admin/visimisi/edit', $data);
    }

    public function update($id)
{
    $fileGambar = $this->request->getFile('gambar');
    $dataUpdate = [
        'visi' => $this->request->getPost('visi'),
        'misi' => $this->request->getPost('misi')
    ];

    if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
        // generate nama baru
        $newName = $fileGambar->getRandomName();
        // simpan ke folder public/uploads/visimisi
        $fileGambar->move('uploads/visimisi', $newName);
        $dataUpdate['gambar'] = 'uploads/visimisi/' . $newName;

        // hapus gambar lama jika ada
        $oldData = $this->visimisiModel->find($id);
        if ($oldData && !empty($oldData['gambar']) && file_exists($oldData['gambar'])) {
            unlink($oldData['gambar']);
        }
    }

    $this->visimisiModel->update($id, $dataUpdate);

    return redirect()->to('/admin/visimisi')->with('success', 'Visi & Misi berhasil diperbarui');
}

public function delete($id)
{
    $model = new \App\Models\VisiMisiModel();

    // Ambil data berdasarkan ID
    $data = $model->find($id);

    if (!$data) {
        return redirect()->to('/admin/visimisi')->with('error', 'Data tidak ditemukan.');
    }

    // Hapus gambar jika ada dan bukan default
    if (!empty($data['gambar']) && file_exists('assets/img/' . $data['gambar'])) {
        unlink('assets/img/' . $data['gambar']);
    }

    // Hapus data dari database
    $model->delete($id);

    return redirect()->to('/admin/visimisi')->with('success', 'Data berhasil dihapus.');
}

}
