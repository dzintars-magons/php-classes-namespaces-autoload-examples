<?php

namespace Payment\PaymentMethod;

use PaymentInterface;

require_once '/var/www/php-29aug-2020/classes/Payment/PaymentProcess/PaymentInterface.php';

class Bank implements PaymentInterface
{
    public function loginFirst()
    {
        return "First log in and then ";
    }

    public function payNow() 
    {
        return "Bank";
    }

    public function paymentProcess()
    {
        return $this->loginFirst() . "buying with " . $this->payNow();
    }
}