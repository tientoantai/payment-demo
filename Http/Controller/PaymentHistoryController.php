<?php

namespace Http\Controller;


use PaymentHistoryService\PaymentHistoryCondition;
use PaymentHistoryService\PaymentHistoryFinder;

class PaymentHistoryController
{
    protected $paymentHistoryFinder;

    /**
     * PaymentHistoryController constructor.
     * @param PaymentHistoryFinder $paymentHistoryFinder
     */
    public function __construct($paymentHistoryFinder)
    {
        $this->paymentHistoryFinder = $paymentHistoryFinder;
    }

    /**
     * @param PaymentHistoryCondition $condition
     */
    public function getHistory($condition)
    {
        //condition can be provide in a middleware
        $this->paymentHistoryFinder->find($condition);
        //TODO - something to finish action
    }
}