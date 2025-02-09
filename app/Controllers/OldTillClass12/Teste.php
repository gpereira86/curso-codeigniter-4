<?php

namespace App\Controllers\OldTillClass12;

use App\Controllers\BaseController;

class Teste extends BaseController
{
    public function index()
    {
        return $this->response->setJSON("Teu cú")->setStatusCode(200);
    }
}
