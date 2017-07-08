<?php

namespace Payment;


interface PaymentMethod
{
    function process();
}