<?php

namespace App\Repository;

use App\Specification\SpecificationInterface;


class CustomerRepository
{

    protected $customers;
    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function bySpecification(SpecificationInterface $specification)
    {

        // $matches = [];
        // foreach ($this->customers as $customer) {
        //     if($specification->isSatisfiedBy($customer)){
        //         $matches[] = $customer;
        //     }
        // }
        // return $matches;

        // use callable with array_filter 
        return array_filter($this->customers, array($specification, 'isSatisfiedBy'));
    }

    public function getCustomers()
    {
        return $this->customers;
    }
}
