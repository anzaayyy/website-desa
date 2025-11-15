<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SarprasModel;

class SarprasController extends BaseController
{
    public function index()
    {
        $model = new SarprasModel(); 
        $data['sarpras'] = $model->findAll();

        return view('sarana_prasarana', $data);
    }
}
