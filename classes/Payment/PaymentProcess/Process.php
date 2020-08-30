<?php

namespace Payment\PaymentProcess;

require_once '/var/www/php-29aug-2020/classes/Payment/PaymentProcess/PaymentInterface.php';
use PaymentInterface;

class Process 
{
    public function pay(PaymentInterface $paymentType)
    {
         return "Buying with: " . $paymentType->payNow();
    }
}

