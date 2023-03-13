<?php

use PHPUnit\Framework\TestCase;

use App\CustomerIsGold;
use App\Customer;

class CustomerIsGoldTest extends TestCase
{

    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $sprecification = new CustomerIsGold();

        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($sprecification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($sprecification->isSatisfiedBy($silverCustomer));
    }
}
