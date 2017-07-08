<?php

namespace PaymentHistoryService;

use User\User;

class UserAndPaymentMethodCondition implements PaymentHistoryCondition
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @var \PaymentMethod\PaymentMethod; []
     */
    protected $paymentMethods;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \PaymentMethod\PaymentMethod[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param \PaymentMethod\PaymentMethod[] $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    function run()
    {
        // TODO: Implement run() method.
        
        //return Payment history by specific Payment method of an User
    }
}