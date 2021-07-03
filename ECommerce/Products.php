<?php

class Products
{
    public $name;
    public $quantity;
    public $price;
    public $description;
    public $photoURL;
    public $category;

    /**
     * Products constructor.
     * @param $name
     * @param $quantity
     * @param $price
     * @param $description
     * @param $photoURL
     * @param $category
     */
    public function __construct($name, $quantity, $price, $description, $photoURL, Categories $category)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->description = $description;
        $this->photoURL = $photoURL;
        $this->category = $category;
    }


}
