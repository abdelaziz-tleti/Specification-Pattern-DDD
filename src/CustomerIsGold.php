<?php

namespace App;

use App\Customer;

class CustomerIsGold implements Specification
{

    public function _construct()
    {
    }
    public function isSatisfiedBy(Customer $customer)
    {
        return  $customer->plan() == 'gold';
    }
}
