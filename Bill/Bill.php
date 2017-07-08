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
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return User
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param User $payer
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    }

    /**
     * @var User
     */
    private $payer;
}