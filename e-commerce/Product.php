<?php

class Product{
    public $name;
    public $qty;
    public $price;
    public $description;
    public $photoUrl;

    public $category; //Reference me klasen category;

    public function __construct($name, $quantity, $price, $desc, $photo){
        $this->name = $name;
        $this->qty = $quantity;
        $this->price = $price;
        $this->description = $desc;
        $this-> photoUrl = $photo;
    }

    public function setCategory($category){
        $this->category = $category;
    }
}