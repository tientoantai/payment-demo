<?php

namespace Helper\Provider;


use PaymentMethod\PaymentMethod;

class PaymentMethodProvider
{
    /**
     * @param $paymentMethodIdentifier
     * @return PaymentMethod
     */
    public function provide($paymentMethodIdentifier)
    {
        //TODO - this function should return a PaymentMethod Instance
    }

    /**
     * @param $paymentMethodIdentifierList
     * @return PaymentMethod []
     */
    public function provideMany($paymentMethodIdentifierList)
    {
        //TODO - this function should return an array of PaymentMethod Instances
    }
}