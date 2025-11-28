<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class KritikController extends BaseController
{

    public function index() 
    {
        return view('admin/kritik/index');
    }
}