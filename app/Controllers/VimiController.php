<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VisimisiModel;
class VimiController extends BaseController
{
    public function index()
    {
        $model = new VisimisiModel();

        // Ambil data pertama dari tabel vimi
        $data['vimi'] = $model->first();

        return view('visimisi', $data);
    }
}
