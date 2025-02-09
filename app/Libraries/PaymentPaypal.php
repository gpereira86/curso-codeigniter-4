<?php

namespace App\Libraries;

use App\Libraries\interfaces\PaymentInterface;

class PaymentPaypal implements PaymentInterface
{
    public function pay()
    {
        var_dump('Pay with paypal');
    }
}