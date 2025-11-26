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
        $data['pengaduan'] = $this->pengaduanModel->orderBy('id_pengaduan','DESC')->findAll();
        return view('admin/pengaduan/index', $data);
    }

    public function detail($id)
    {
        $data['pengaduan'] = $this->pengaduanModel->find($id);
        return view('admin/pengaduan/detail', $data);
    }

    public function updateStatus($id)
    {
        $status = $this->request->getPost('status');

        $this->pengaduanModel->update($id, ['status' => $status]);

        return redirect()->back()->with('success','Status berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->pengaduanModel->delete($id);

        return redirect()->to('/admin/pengaduan')->with('success','Pengaduan berhasil dihapus.');
    }
}
