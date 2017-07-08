<?php 

namespace Payment;

use Bill\Bill;
use PaymentMethod\PaymentMethod;

class Payment{

    /**
     * @var PaymentMethod
     */
    private $method;

    /**
     * @var Bill
     */
    private $bill;

    /**
     * @var float
     */
    private $sum;

    public function __construct($bill, $method)
    {
        $this->bill   = $bill;
        $this->method = $method;
    }
    /**
     * @return Bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * @return PaymentMethod
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }


}
