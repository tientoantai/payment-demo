<?php

namespace Helper\Factory;


use Bill\Bill;
use Helper\Provider\UserProvider;

class BillFactory
{
    /**
     * @param [] $raw
     * @return Bill $bill
     */
    public function factory($raw)
    {
        $bill = new Bill();
        $bill->setAmount($raw['amount'])
            ->setCurrency($raw['currency'])
            ->setPayer(UserProvider::provide($raw['user_id']));
        ;
        return $bill;
        
    }
}