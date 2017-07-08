<?php
namespace User;

use PaymentMethod\PaymentMethod;

class User
{

    protected $id;
    /**
     * @var PaymentMethod[]
     */
    protected $availablePaymentMethod;

    /**
     * @param PaymentMethod[] $paymentMethods
     */
    public function bindPaymentMethods($paymentMethods)
    {
        array_merge($this->availablePaymentMethod, $paymentMethods);
    }

    /**
     * @param $paymentMethod
     * @throws \Exception
     */
    public function unbindPaymentMethod($paymentMethod)
    {
        if(($key = array_search($paymentMethod, $this->availablePaymentMethod)) !== false) {
            unset($this->availablePaymentMethod[$key]);
        }else{
            throw new \Exception("Can not unbind this method");
        }
    }

}