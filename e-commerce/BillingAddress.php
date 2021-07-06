<?php

class BillingAddress{
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $country;
    public $postCode;

    public function __construct($name, $last, $address, $city,  $country, $postalCode){
        $this->firstName = $name;
        $this->lastName = $last;
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
        $this->postCode = $postalCode;
    }
}