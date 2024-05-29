<?php

namespace App\Controllers;

use App\Models\Id_model;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new Id_model();
        $datamodel['biodata'] = $model->getBiodata();
        return view('index', $datamodel);
    }
}
