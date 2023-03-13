<?php

namespace App\Customer;

class Customer implements CustomerInterface
{
    protected $plan;
    public function __construct($plan)
    {
        $this->plan = $plan;
    }

    public function plan()
    {
        return $this->plan;
    }
}
