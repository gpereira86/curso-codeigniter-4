<?php

namespace App\Controllers\OldTillClass12;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {

//        return $this->response->setJSON('data')->setStatusCode(200);
    }

    public function store()
    {
        return redirect()->route('home');
//        return $this->response->setJSON('stored')->setStatusCode(200);
    }

    public function edit($parametros)
    {
        var_dump($parametros);
    }
}
