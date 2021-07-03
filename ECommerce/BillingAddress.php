<?php

class BillingAddress
{
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $counter;
    public $postCode;

    /**
     * BillingAddress constructor.
     * @param $firstName
     * @param $lastName
     * @param $address
     * @param $city
     * @param $counter
     * @param $postCode
     */
    public function __construct($firstName, $lastName, $address, $city, $counter, $postCode)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->city = $city;
        $this->counter = $counter;
        $this->postCode = $postCode;
    }


}
