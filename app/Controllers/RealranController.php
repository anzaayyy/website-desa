<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RealranController extends BaseController
{
    public function index()
    {
        return view('realisasi_anggaran');
    }
}
