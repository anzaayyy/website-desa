<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    public function index()
    {
        $model = new BeritaModel();
        $data['berita'] = $model->orderBy('tanggal', 'DESC')->findAll(6);
        return view('berita', $data);
    }

    public function detail($slug)
    {
        $model = new BeritaModel();
        $berita = $model->where('slug', $slug)->first();

        if (!$berita) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Berita tidak ditemukan");
        }

        // Siapkan meta title dan description
        $data = [
            'title' => $berita['meta_title'] ?? $berita['judul'],
            'meta_description' => $berita['meta_desc'] ?? strip_tags(substr($berita['deskripsi'], 0, 150)),
            'berita' => $berita
        ];

        return view('detailBerita', $data);
    }
}
