<?php


class CustomerIsGold  {

    use Customer;
    public function isSatisfiedBy(Customer $customer){


        $customer->plan == 'gold';
    }

}

