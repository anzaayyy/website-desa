<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SarprasModel;

class SarpraController extends BaseController
{
    protected $sarpra;

    public function __construct()
    {
        $this->sarpra = new SarprasModel();
    }

    public function index()
    {
        $data['title'] = 'Data Sarana & Prasarana';
        $data['sarpra'] = $this->sarpra->findAll();

        return view('admin/sarpra/index', $data);
    }

    public function create()
    {
        return view('admin/sarpra/create');
    }

    public function store()
    {
        $this->sarpra->save([
            'judul_sarana' => $this->request->getPost('judul_sarana'),
            'isi_sarana' => $this->request->getPost('isi_sarana'),
            'judul_prasarana' => $this->request->getPost('judul_prasarana'),
            'isi_prasarana' => $this->request->getPost('isi_prasarana'),
        ]);

        return redirect()->to('/admin/sarpra')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['data'] = $this->sarpra->find($id);

        return view('admin/sarpra/edit', $data);
    }

    public function update($id)
    {
        $this->sarpra->update($id, [
            'judul_sarana' => $this->request->getPost('judul_sarana'),
            'isi_sarana' => $this->request->getPost('isi_sarana'),
            'judul_prasarana' => $this->request->getPost('judul_prasarana'),
            'isi_prasarana' => $this->request->getPost('isi_prasarana'),
        ]);

        return redirect()->to('/admin/sarpra')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->sarpra->delete($id);

        return redirect()->to('/admin/sarpra')->with('success', 'Data berhasil dihapus.');
    }
}
