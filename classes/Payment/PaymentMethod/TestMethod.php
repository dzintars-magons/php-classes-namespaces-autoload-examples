<?php

namespace Payment\PaymentMethod;

use Payment\AbstractTestPayment;

class TestMethod extends AbstractTestPayment
{
    public function payNow()
    {
        return "Test Method Works";
    }
}