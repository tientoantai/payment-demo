<?php

namespace PaymentHistoryService;

class PaymentHistoryFinder
{
    public function find($condition)
    {
        return $condition->run();
    }
}