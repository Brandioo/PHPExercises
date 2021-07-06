<?php

class ShippingMethod{
    public $name;
    public $price;
    public $duration;


    public function __construct($name, $price, $duration){
        $this->name = $name;
        $this->price = $price;
        $this->duration = $duration;
    }
}