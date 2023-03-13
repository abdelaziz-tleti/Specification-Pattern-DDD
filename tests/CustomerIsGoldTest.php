<?php

use PHPUnit\Framework\TestCase;
use App\Specification\CustomerIsGold;
use App\Customer\Customer;
use App\Repository\CustomerRepository;

class CustomerIsGoldTest extends TestCase
{

    protected $customers;

    public function setup(): void
    {
        $this->customers = new CustomerRepository([
            new Customer('gold'),
            new Customer('silver'),
            new Customer('bronze'),
            new Customer('gold'),
            new Customer('silver'),
        ]);
    }
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
    function it_fetch_all_customers()
    {
        $results = $this->customers->getCustomers();
        $this->assertCount(5, $results);
    }

    /** @test */
    function it_fetch_all_customers_who_match_given_specifications()
    {
        $results = $this->customers->bySpecification(new CustomerIsGold);
        $this->assertCount(2, $results);
    }
}
