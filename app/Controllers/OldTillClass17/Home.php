<?php

namespace App\Controllers\OldTillClass17;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index():string
    {
//        helper(['array', 'form', 'html', 'teste']);

//        Events::trigger('payment', new PaymentPaypal());
//        die();
//
//        return view('home');

        $auth1 = single_service('auth', 'teste1');
        $auth2 = single_service('auth', 'teste2');



        return view('home');
    }
}
