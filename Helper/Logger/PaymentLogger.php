<?php

namespace Helper\Logger;


use Payment\Payment;

class PaymentLogger implements Logger
{
    /**
     * @var LogStringBuilder
     */
    protected $builder;

    /**
     * PaymentLogger constructor.
     * @param $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param $payment
     */
    public function writeLog($payment)
    {
        $logString = $this->builder->buildPaymentLog($payment);
        //TODO write $logString to file
    }
}