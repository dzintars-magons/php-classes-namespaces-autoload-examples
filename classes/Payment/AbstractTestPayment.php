<?php

namespace Payment;

abstract class AbstractTestPayment
{
    public function testPayment() {
        return "Just a test for Abstract class use";
    }
    // method below requires a class, which extends, this abstract class
    //to have a method payNow() otherwise it will throw an error
    abstract public function payNow();
}