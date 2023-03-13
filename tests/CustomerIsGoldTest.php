<?php
// require_once ('PHPUnit/Framework/TestCase.php');
// require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;
class CustomerIsGoldTest extends TestCase
{

    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        new CustomerIsGold;
    }

    
}