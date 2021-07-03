<?php

class ShippingMethod{
    public $name;
    public $price;
    public $duration;

    /**
     * ShippingMethod constructor.
     * @param $name
     * @param $price
     * @param $duration
     */
    public function __construct($name, $price, $duration)
    {
        $this->name = $name;
        $this->price = $price;
        $this->duration = $duration;
    }


}
