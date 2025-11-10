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

}
