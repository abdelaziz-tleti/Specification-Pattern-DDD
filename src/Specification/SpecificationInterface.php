<?php

namespace App\Specification;

use App\Customer\CustomerInterface;

interface SpecificationInterface
{
    /**
     * @param $customerInterface
     *
     * @return bool
     */
    public function isSatisfiedBy(CustomerInterface $customer);
}
