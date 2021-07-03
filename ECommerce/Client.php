<?php

class Client{
    public $firstName;
    public $lastName;
    public $email;
    public $billingAddress;

    /**
     * Client constructor.
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $billingAddress
     */
    public function __construct($firstName, $lastName, $email, BillingAddress $billingAddress)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->billingAddress = $billingAddress;
    }
}