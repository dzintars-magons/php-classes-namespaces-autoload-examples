<?php

namespace Payment\PaymentProcess;

use PaymentInterface;

class Process 
{
    public function pay(PaymentInterface $paymentType)
    {
         return $paymentType->paymentProcess();
    }
}

