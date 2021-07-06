<?php

class Client{
    public $firstName;
    public $lastName;
    public $email;
    public BillingAddress $billingAddress;
    
    public function __construct($firstName, $lastName, $email){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }       

    public function setBillingAddress(BillingAddress $billingAddress){
        $this->billingAddress = $billingAddress;
    }
}