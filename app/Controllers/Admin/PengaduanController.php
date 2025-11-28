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
}
