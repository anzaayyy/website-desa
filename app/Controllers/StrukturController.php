<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StrukturModel;

class StrukturController extends BaseController
{
    public function struktur()
    {
        $model = new StrukturModel();
        $data ['struktur'] = $model->findAll();
        return view('struktur', $data);
    }

    public function detail($slug)
    {
        $model = new StrukturModel();
        $data['struktur'] = $model->where('slug', $slug)->first();

        if (!$data['struktur']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data struktur dengan slug $slug tidak ditemukan");
        }

        return view('detailStruktur', $data);
    }
}
