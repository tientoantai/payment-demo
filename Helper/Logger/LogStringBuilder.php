<?php


namespace Helper\Logger;


use PaymentMethod\PaymentMethod;

class LogStringBuilder
{
    /**
     * @param $payment
     * @return string
     */
    public function buildPaymentLog($payment)
    {
        //TODO
        $logString = "We can build whatever with info from \$payment";
        return $logString;
    }

    /**
     * @param PaymentMethod[] $paymentMethods
     * @return string
     */
    public function buildBindMethodLog($paymentMethods)
    {
        //TODO
        $logString = "We can build whatever with info from \$paymentMethods";
        return $logString;
    }

    public function buildUnBindMethodLog($paymentMethod)
    {
        //TODO
        $logString = "We can build whatever with info from \$paymentMethod";
        return $logString;
    }
}