<?php

namespace PaymentMethod;


use Bill\Bill;
use Payment\Payment;

abstract class PaymentMethod
{
    /**
     * @var Commission[]
     */
    protected $commissions;

    public function __construct($commissions)
    {
        $this->commissions = $commissions;
    }

    /**
     * @param $bill
     * @return Payment
     */
    function process($bill){

    }

    /**
     * @param Bill $bill
     * @return float
     */
    protected function getTotalCommissionsAmount($bill){
        $total = 0;
        foreach ($this->commissions as $commission){
            $total += $commission->getCommissionsAmount($bill);
        }
        return $total;
    }
}