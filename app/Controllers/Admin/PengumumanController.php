<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    protected $pengumumanModel;

    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data['pengumuman'] = $this->pengumumanModel->findAll();
        return view('admin/pengumuman/index', $data);
    }

    public function create()
    {
        return view('admin/pengumuman/create');
    }

    public function store()
    {
        $gambar = $this->request->getFile('gambar');
        $file = $this->request->getFile('file');

        $gambarName = $gambar && $gambar->isValid() ? $gambar->getRandomName() : null;
        if ($gambarName) $gambar->move('uploads/pengumuman', $gambarName);

        $fileName = $file && $file->isValid() ? $file->getRandomName() : null;
        if ($fileName) $file->move('uploads/pengumuman/file', $fileName);

        $this->pengumumanModel->save([
            'judul'          => $this->request->getPost('judul'),
            'isi'            => $this->request->getPost('isi'),
            'gambar'         => $gambarName,
            'file'           => $fileName,
            'tanggal_post'=> $this->request->getPost('tanggal_post'),
            'tanggal_exp'=> $this->request->getPost('tanggal_exp'),
        ]);

        return redirect()->to('/admin/pengumuman');
    }

    public function edit($id)
    {
        $data['pengumuman'] = $this->pengumumanModel->find($id);
        return view('admin/pengumuman/edit', $data);
    }

    public function update($id)
    {
        $pengumuman = $this->pengumumanModel->find($id);

        $gambar = $this->request->getFile('gambar');
        $file = $this->request->getFile('file');

        $gambarName = $pengumuman['gambar'];
        if ($gambar && $gambar->isValid()) {
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads/pengumuman', $gambarName);
        }

        $fileName = $pengumuman['file'];
        if ($file && $file->isValid()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/pengumuman/file', $fileName);
        }

        $this->pengumumanModel->update($id, [
            'judul'          => $this->request->getPost('judul'),
            'isi'            => $this->request->getPost('isi'),
            'gambar'         => $gambarName,
            'file'           => $fileName,
            'tanggal_post'=> $this->request->getPost('tanggal_post'),
            'tanggal_exp'=> $this->request->getPost('tanggal_exp'),
        ]);

        return redirect()->to('/admin/pengumuman');
    }
}
