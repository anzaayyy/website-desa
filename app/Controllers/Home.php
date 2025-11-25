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
use App\Models\SarprasModel;
use App\Models\APBDesModel;
use App\Models\RealranModel;
use App\Models\PendapatanDesaModel;
use App\Models\PembiayaanDesaModel;
use App\Models\PembangunanModel;
use App\Models\PersuratanModel;

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

        $model = new SarprasModel(); 
        $data['sarpras'] = $model->findAll();

        $apbdesModel         = new APBDesModel();
        $realranModel        = new RealranModel();
        $pendapatanModel     = new PendapatanDesaModel();
        $pembiayaanModel     = new PembiayaanDesaModel();

        $tahun = date('Y');
        $start = $tahun . '-01-01';
        $end   = $tahun . '-12-31';

        // ========= PENDAPATAN =========
        $pendapatan = $pendapatanModel
            ->where('tanggal_pendapatan >=', $start)
            ->where('tanggal_pendapatan <=', $end)
            ->findAll();

        $totalPendapatan = 0;
        foreach ($pendapatan as $row) {
            $totalPendapatan += (float)$row['jumlah'];
        }

        // ========= BELANJA / REALISASI =========
        $realisasi = $realranModel->findAll();
        $totalAnggaran  = 0;
        $totalRealisasi = 0;

        foreach ($realisasi as $row) {
            $totalAnggaran  += (float)$row['anggaran'];
            $totalRealisasi += (float)$row['realisasi'];
        }

        // ========= PEMBIAYAAN =========
        $pembiayaan = $pembiayaanModel->findAll();
        $totalPembiayaanNetto = 0;

        foreach ($pembiayaan as $row) {
            $totalPembiayaanNetto += (float)$row['jumlah'];
        }

        // ========= PERHITUNGAN RINGKASAN =========
        $silpa = $totalPendapatan - $totalRealisasi;
        $sisaAnggaran = $totalAnggaran - $totalRealisasi;

        // ========= KIRIM KE BERANDA =========
        $data['apbdes'] = [
            'total_pendapatan'            => $totalPendapatan,
            'total_realisasi_pendapatan'  => $totalRealisasi,
            'total_belanja'               => $totalAnggaran,
            'total_realisasi_belanja'     => $totalRealisasi,
            'silpa'                       => $silpa,
            'sisa_anggaran'               => $sisaAnggaran
        ];

        $model = new RealranModel();
        $data['realisasi'] = $model->findAll();

        $pembangunanModel = new PembangunanModel();
        $data['pembangunan'] = $pembangunanModel
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('index', $data);
    }
}
