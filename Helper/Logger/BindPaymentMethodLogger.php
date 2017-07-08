<?php

namespace Helper\Logger;


use PaymentMethod\PaymentMethod;

class BindPaymentMethodLogger
{
    /**
     * @var LogStringBuilder
     */
    protected $builder;

    /**
     * BindPaymentMethodLogger constructor.
     * @param $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param PaymentMethod[] $paymentMethods
     */
    public function writeLog($paymentMethods)
    {
        $logString = $this->builder->buildUnBindMethodLog($paymentMethods);
        //TODO write $logString to file
    }
}