<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    public function index()
    {
        $pengumumanModel = new PengumumanModel();
        // ambil 4 pengumuman terbaru
        $data['pengumuman'] = $pengumumanModel->orderBy('tanggal', 'DESC')->findAll(4);

        return view('pengumuman', $data);
}
}