<?php

namespace Http\Controller;

use Helper\Factory\BillFactory;
use Helper\Provider\PaymentMethodProvider;

class PayController
{
    /**
     * @var PaymentMethodProvider
     */
    protected $paymentMethodProvider;

    /**
     * @var BillFactory
     */
    protected $billFactory;

    /**
     * PayController constructor.
     * @param PaymentMethodProvider $paymentMethodProvider
     * @param BillFactory $billFactory
     */
    public function __construct(PaymentMethodProvider $paymentMethodProvider, BillFactory $billFactory)
    {
        //$paymentMethodProvider and $billFactory can be provided by Service Provider
        $this->paymentMethodProvider = $paymentMethodProvider;
        $this->billFactory           = $billFactory;
    }

    /**
     * @param $billData
     * @param $paymentMethodIdentifier
     */
    public function pay($billData, $paymentMethodIdentifier)
    {
        $paymentMethod = $this->paymentMethodProvider->provide($paymentMethodIdentifier);
        $bill = $this->billFactory->factory($billData);
        $paymentMethod->process($bill);
        //TODO something else to complete pay action

        //Write Log
    }

}