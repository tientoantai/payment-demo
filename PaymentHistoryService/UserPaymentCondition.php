<?php

namespace PaymentHistoryService;


use User\User;

class UserPaymentCondition implements PaymentHistoryCondition
{

    /**
     * @var User
     */
    protected $user;

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

    function run()
    {
        // TODO: Implement run() method.
        // return Payment history of an User
    }
}