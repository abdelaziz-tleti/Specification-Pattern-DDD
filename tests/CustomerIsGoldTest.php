<?php

use PHPUnit\Framework\TestCase;

use App\CustomerIsGold;
use App\Customer;
use App\CustomerRepository;

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


    /** @test */
    function it_fetch_all_customers_who_match_given_specifications()
    {
        $customers = new CustomerRepository([
            new Customer('gold'),
            new Customer('silver'),
            new Customer('bronze'),
            new Customer('gold'),
            new Customer('silver'),
        ]);
        $results = $customers->bySpecification(new CustomerIsGold);

        $this->assertCount(2, $results);
    }
}
