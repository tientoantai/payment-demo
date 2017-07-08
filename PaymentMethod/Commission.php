<?php

namespace PaymentMethod;


abstract class Commission
{
    const PERCENT = 0;

    public function getCommissionsAmount($bill)
    {
        //TODO implement some logic to calculate commission
    }
}