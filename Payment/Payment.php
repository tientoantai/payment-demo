<?php 

namespace Payment;

use PaymentMethod\PaymentMethod;

class Payment{

    /**
     * @var PaymentMethod
     */
    private $method;

    /**
     * @var float
     */
    private $sum;

    /**
     * @return PaymentMethod
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param PaymentMethod $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }


    public function setSum()
    {

    }


}
