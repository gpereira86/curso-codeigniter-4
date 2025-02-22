<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    public function index():string
    {
        return view('contact');
    }

    public function store()
    {
        var_dump("Send contact");
    }
}
