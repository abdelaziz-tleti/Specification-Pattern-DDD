<?php

namespace App;
use App\Customer;
interface Specification
{
    /**
     * @param $customer
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $customer);
}