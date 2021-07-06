<?php

class Category{
    public $name;
    public $description;
    public $photoUrl;

    public Category $subCategory;
    public $products = []; // Array me objekte te tipit product

    public function __construct($name, $desc, $photo){
        $this->name = $name;
        $this->description = $desc;
        $this->photoUrl = $photo;
    }

    public function setCategory(Category $category){
        $this->subCategory = $category;
    }

    public function setProduct(Product $product){
        $this->products[] = $product;
    }
}