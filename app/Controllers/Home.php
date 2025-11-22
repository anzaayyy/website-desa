<?php

namespace App\Controllers;

use App\Models\SejarahModel;
use App\Models\VisimisiModel;
use App\Models\StrukturModel;
use App\Models\PerangkatModel;
use App\Models\BeritaModel;
use App\Models\PengumumanModel;
use App\Models\AgendaModel;
use App\Models\PendudukModel;
use App\Models\WilayahModel;
use App\Models\LembagaModel;

class Home extends BaseController
{
     public function index()
    {
        // === Sejarah ===
        $sejarahModel = new SejarahModel();
        $data['sejarah'] = $sejarahModel->first();

        $model = new VisimisiModel();
        $data['vimi'] = $model->first();

        $model = new StrukturModel();
        $data ['struktur'] = $model->findAll();

        $model = new PerangkatModel();
        $data ['perangkat'] = $model->findAll();

        $model = new BeritaModel();
        $data['berita'] = $model->orderBy('tanggal', 'DESC')->findAll(6);

        // === Pengumuman (4 terbaru) ===
        $pengumumanModel = new PengumumanModel();
        $data['pengumuman_terbaru'] = $pengumumanModel
            ->orderBy('tanggal', 'DESC')
            ->limit(4)
            ->find();

        $agendaModel = new AgendaModel();
        $data['agenda'] = $agendaModel->orderBy('tanggal_mulai','DESC')->findAll();

        $wilayahModel = new WilayahModel();
        $data['wilayah'] = $wilayahModel->findAll();

        $model = new LembagaModel();
        $data['lembaga'] = $model->findAll();

        return view('index', $data);
    }
}
