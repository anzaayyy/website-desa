<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WilayahController extends BaseController
{
    public function index()
    {
        return view('wilayah');
    }
}
