<?php

namespace App\Controllers;

use App\Libraries\Payment;
use App\Libraries\PaymentPageSeguro;
use App\Libraries\PaymentPaypal;
use CodeIgniter\Events\Events;
use Config\Services;

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
