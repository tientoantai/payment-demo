<?php

namespace PaymentMethod;

class VATCommission extends Commission
{
    
    const PERCENT = 0.1; //10%

    public function getCommissionsAmount($bill)
    {
        return $bill->amount * self::PERCENT;
    }

}