<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    public function index()
    {
        $model = new PengumumanModel();
        $data['pengumuman'] = $model->orderBy('tanggal', 'DESC')->findAll();

        return view('pengumuman', $data);
    }

    public function detail($slug)
    {
        $model = new PengumumanModel();
        $pengumuman = $model->where('slug', $slug)->first();

        if (!$pengumuman) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Pengumuman tidak ditemukan");
        }

        $data['p'] = $pengumuman;
        $data['title'] = $pengumuman['meta_title'] ?: $pengumuman['judul'];
        $data['meta_desc'] = $pengumuman['meta_desc'] ?: strip_tags($pengumuman['deskripsi']);

        return view('detailPengumuman', $data);
    }
}