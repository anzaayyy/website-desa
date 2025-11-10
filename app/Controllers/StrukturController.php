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
}
