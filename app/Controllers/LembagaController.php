<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LembagaModel;

class LembagaController extends BaseController
{
    public function index()
    {
        $model = new LembagaModel();
        $data['lembaga'] = $model->findAll();

        $data['title'] = 'Lembaga Desa';
        return view('lembaga', $data);
    }

    public function detail($slug)
    {
        $model = new LembagaModel();
        $lembaga = $model->getBySlug($slug);

        if (!$lembaga) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Lembaga tidak ditemukan");
        }

        $data = [
            'title' => $lembaga['meta_title'] ?? $lembaga['nama_lembaga'],
            'meta_desc' => $lembaga['meta_desc'] ?? 'Informasi wilayah dan lembaga desa.',
            'lembaga' => $lembaga,
        ];        

        return view('detailLembaga', $data);
    }
}
