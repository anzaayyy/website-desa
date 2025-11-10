<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KritikController extends BaseController
{
    public function index()
    {
        return view('kritik');
    }
}
