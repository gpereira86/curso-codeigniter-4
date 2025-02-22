<?php

namespace App\Controllers\OldTillClass17;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return view('products');
    }
}
