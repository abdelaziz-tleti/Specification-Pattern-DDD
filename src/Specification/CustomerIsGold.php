<?php

namespace App\Specification;

use App\Customer\CustomerInterface;

class CustomerIsGold implements SpecificationInterface
{
    public function isSatisfiedBy(CustomerInterface $customer)
    {
        return  $customer->plan() == 'gold';
    }
}
