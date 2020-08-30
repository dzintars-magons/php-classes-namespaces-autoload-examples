<?php

namespace Payment\PaymentMethod;
 
use PaymentInterface;
use LoginInterface;

require_once '/var/www/php-29aug-2020/classes/Payment/PaymentProcess/LoginInterface.php';
require_once '/var/www/php-29aug-2020/classes/Payment/PaymentProcess/PaymentInterface.php';

class Paypal implements LoginInterface, PaymentInterface
{
    public function loginFirst()
    {
        return "First log in and then ";
    }

    public function payNow() 
    {
        return "Paypal";
    }

    public function paymentProcess()
    {
        return $this->loginFirst() . "buying with " . $this->payNow();
    }
}