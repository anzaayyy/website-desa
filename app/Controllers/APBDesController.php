<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class APBDesController extends BaseController
{
    public function index()
    {
        return view('APBDes');
    }
}
