<?php
namespace User;

use Payment\PaymentMethod;

class User
{

    private $id;
    /**
     * @var string[]
     */
    protected $availablePaymentMethod;

    public function __construct()
    {

    }

    public function bindPaymentMethod($paymentMethodName)
    {
        array_push($this->availablePaymentMethod, $paymentMethodName);
    }

    public function unbindPaymentMethod($paymentMethodName)
    {
        if(($key = array_search($paymentMethodName, $this->availablePaymentMethod)) !== false) {
            unset($this->availablePaymentMethod[$key]);
        }else{
            throw new \Exception("Can not unbind this method");
        }
    }

}