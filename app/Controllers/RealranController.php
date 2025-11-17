<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RealranModel;

class RealranController extends BaseController
{
    public function index()
    {
        $model = new RealranModel();

        // Ambil semua data realisasi anggaran
        $data['realisasi'] = $model->findAll();

        return view('realisasi_anggaran', $data);
    }
}
