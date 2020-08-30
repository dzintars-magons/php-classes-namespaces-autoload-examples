<?php

namespace Payment\PaymentMethod;

use PaymentInterface;

require_once '/var/www/php-29aug-2020/classes/Payment/PaymentProcess/PaymentInterface.php';

class Cash implements PaymentInterface
{

    public function payNow() 
    {
        return "Cash";
    }

    public function paymentProcess()
    {
        return "Just buying with " . $this->payNow();
    }
}