<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SarprasModel;

class SarprasController extends BaseController
{
    public function index()
    {
        return view('sarana_prasarana');
    }
}
