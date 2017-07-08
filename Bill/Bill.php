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

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param User $payer
     * @return self
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
        return $this;
    }


    

}