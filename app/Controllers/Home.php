<?php

namespace App\Controllers;

use App\Models\SejarahModel;
use App\Models\PengumumanModel;

class Home extends BaseController
{
     public function index()
    {
        // === Sejarah ===
        $sejarahModel = new SejarahModel();
        $data['sejarah'] = $sejarahModel->first();

        // === Pengumuman (4 terbaru) ===
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman_terbaru'] = $pengumumanModel
            ->orderBy('tanggal', 'DESC')
            ->limit(4)
            ->find();

        return view('index', $data);
    }
}
