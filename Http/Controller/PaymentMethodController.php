<?php

namespace Http\Controller;


use Helper\Provider\PaymentMethodProvider;
use Helper\Provider\UserProvider;

class PaymentMethodController
{
    /**
     * @var PaymentMethodProvider
     */
    protected $paymentMethodProvider;

    /**
     * @var UserProvider
     */
    protected $userProvider;

    /**
     * PaymentMethodController constructor.
     * @param $paymentMethodProvider
     * @param $userProvider
     */
    public function __construct($paymentMethodProvider, $userProvider)
    {
        $this->paymentMethodProvider = $paymentMethodProvider;
        $this->userProvider          = $userProvider;
    }

    /**
     * @param []$methodIdentifierList
     * @param $userIdentifier
     */
    public function bindMethod($methodIdentifierList, $userIdentifier)
    {
        $paymentMethods = $this->paymentMethodProvider->provideMany($methodIdentifierList);
        $user = $this->userProvider->provide($userIdentifier);
        $user->bindPaymentMethods($paymentMethods);
        //TODO - something to finish this action
    }

    /**
     * @param $methodIdentifier
     * @param $userIdentifier
     */
    public function unbindMethod($methodIdentifier, $userIdentifier)
    {
        $paymentMethod = $this->paymentMethodProvider->provide($methodIdentifier);
        $user = $this->userProvider->provide($userIdentifier);
        $user->unbindPaymentMethod($paymentMethod);
        //TODO - something to finish this action
    }
}