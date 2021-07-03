<?php

class Categories
{
    public $name;
    public $description;
    public $photoURL;
    public $subCategories = [];
    public $products = [];

    /**
     * Categories constructor.
     * @param $name
     * @param $description
     * @param $photoURL
     */
    public function __construct($name, $description, $photoURL)
    {
        $this->name = $name;
        $this->description = $description;
        $this->photoURL = $photoURL;
    }

    /**
     * @param array $subCategories
     */
    public function setSubCategories(Categories $subCategories): void
    {
        $this->subCategories[] = $subCategories;
    }

    /**
     * @param array $products
     */
    public function setProducts(Products $products): void
    {
        $this->products[] = $products;
    }


}
