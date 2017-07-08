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
     * @return Bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * @param Bill $bill
     */
    public function setBill($bill)
    {
        $this->bill = $bill;
    }

    /**
     * @var Bill
     */
    private $bill;

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
