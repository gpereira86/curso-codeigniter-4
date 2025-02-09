<?php

namespace App\Libraries;

use App\Libraries\interfaces\PaymentInterface;


class PaymentPageSeguro implements PaymentInterface
{
    public function pay()
    {
        var_dump('Pay with PagSeguro');
    }
}
