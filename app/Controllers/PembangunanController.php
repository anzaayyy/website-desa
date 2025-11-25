<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembangunanModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PembangunanController extends BaseController
{
    public function index()
    {
        $model = new PembangunanModel();
        $pembangunan = $model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('pembangunan', [
            'pembangunan' => $pembangunan,
        ]);
    }

    // (Opsional) detail berdasarkan slug
    public function detail($slug)
    {
        $model = new PembangunanModel();

        $data = $model->where('slug', $slug)->first();

        if (!$data) {
            throw new PageNotFoundException('Data pembangunan tidak ditemukan.');
        }

        return view('pembangunan_detail', [
            'pembangunan' => $data,
        ]);
    }
}
