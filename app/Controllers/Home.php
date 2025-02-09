<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index():string
    {
        helper(['array', 'form', 'html', 'teste']);


        return view('home');
    }
}
