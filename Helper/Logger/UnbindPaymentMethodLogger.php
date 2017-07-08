<?php

namespace Helper\Logger;


use PaymentMethod\PaymentMethod;

class UnbindPaymentMethodLogger
{
    /**
     * @var LogStringBuilder
     */
    protected $builder;

    /**
     * UnbindPaymentMethodLogger constructor.
     * @param $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param PaymentMethod $paymentMethod
     */
    public function writeLog($paymentMethod)
    {
        $logString = $this->builder->buildUnBindMethodLog($paymentMethod);
        //TODO write $logString to file
    }
}