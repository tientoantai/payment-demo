<?php
namespace User;

use PaymentMethod\PaymentMethod;

class User
{

    protected $id;
    /**
     * @var PaymentMethod[]
     */
    protected $availablePaymentMethods;

    /**
     * @param PaymentMethod[] $paymentMethods
     */
    public function bindPaymentMethods($paymentMethods)
    {
        array_merge($this->availablePaymentMethods, $paymentMethods);
    }

    /**
     * @param $paymentMethod
     * @throws \Exception
     */
    public function unbindPaymentMethod($paymentMethod)
    {
        if(($key = array_search($paymentMethod, $this->availablePaymentMethods)) !== false) {
            unset($this->availablePaymentMethods[$key]);
        }else{
            throw new \Exception("Can not unbind this method");
        }
    }

}