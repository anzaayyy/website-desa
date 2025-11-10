<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PembangunanController extends BaseController
{
    public function index()
    {
        return view('pembangunan');
    }
}
