<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\APBDesModel;

class APBDesController extends BaseController
{
    public function index()
    {
        $apbdesModel = new APBDesModel();

        // Contoh: ambil 1 data terakhir (tahun paling baru)
        $apbdes = $apbdesModel
            ->orderBy('tahun', 'DESC')
            ->first();

        // Kirim ke view
        return view('APBDes', [
            'apbdes' => $apbdes
        ]);
    }
}
