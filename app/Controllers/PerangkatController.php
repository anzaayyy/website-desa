<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PerangkatModel;

class PerangkatController extends BaseController
{
    public function perangkat()
    {
        $model = new PerangkatModel();
        $kepalaDesa = $model->where('jabatan', 'Kepala Desa')->findAll();
        $lainnya    = $model->where('jabatan !=', 'Kepala Desa')->orderBy('jabatan', 'ASC')->findAll();
        $perangkat  = array_merge($kepalaDesa, $lainnya);

        
        return view('perangkat', [
            'perangkat' => $perangkat
        ]);
    }
}
