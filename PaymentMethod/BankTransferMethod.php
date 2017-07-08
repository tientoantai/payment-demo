<?php

namespace PaymentMethod;

use Bill\Bill;
use Payment\Payment;

class BankTransferMethod extends PaymentMethod
{

    function process($bill)
    {
        $payment = new Payment($bill, $this);
        $payment->setSum($this->getTotalCommissionsAmount($bill));
        //TODO something to complete payment here
        return $payment;
    }

}