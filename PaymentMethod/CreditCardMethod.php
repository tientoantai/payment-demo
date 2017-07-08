<?php

namespace PaymentMethod;

use Bill\Bill;
use Payment\Payment;

class CreditCardMethod extends PaymentMethod
{
    /**
     * @param Bill $bill
     * @return Payment
     */
    function process($bill)
    {
        $payment = new Payment($bill, $this);
        $payment->setSum($this->getCommissionsAmount($bill));
        //TODO something to complete payment here
        return $payment;
    }
}