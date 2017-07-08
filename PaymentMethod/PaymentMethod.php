<?php

namespace PaymentMethod;


abstract class PaymentMethod
{
    /**
     * @var Commission
     */
    protected $commission;

    function process(){

    }
}