<?php

namespace Bill;

use User\User;

class Bill
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var User
     */
    private $payer;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return User
     */
    public function getPayer()
    {
        return $this->payer;
    }

}