<?php

class Store{
    public $name;
    public $domain;
    public $language;


    public $users = []; //array me objekte te tipit user
    public $products = [];
    public $categories = [];
    public $orders = [];

    public function __construct($name, $domain, $lang){
        $this->name = $name;
        $this->domain = $domain;
        $this->language = $lang;
    }

    public function setUser($user){
        $this->users[] = $user;
    }

    public function setProduct($product){
        $this->products[] = $product;
    }

    public function setCategory($category){
        $this->categories[] = $category;
    }

    public function setOrder($order){
        $this->orders[] = $order;
    }

    public function printAll(){
        echo "Store name: {$this->name} <br>";
        echo "Store domain: {$this->domain} <br>";
        
        echo "<b>Store users:</b> <br>";
        foreach($this->users as $user){
            echo "User name: {$user->name} {$user->lastName} <br>";
            echo "-------------------------------------------------<br>";
        }

        echo "<b>Store categories:</b> <br>";
        foreach($this->categories as $category){
            echo "Category name: {$category->name} <br>";
            foreach($category->products as $product){
                echo "--- Product name: {$product->name} <br>";
            } 
            if(isset($category->subCategory)){
                echo "-Sub category name: {$category->subCategory->name} <br>";
                foreach($category->subCategory->products as $subProduct){
                    echo "--- Product name: {$subProduct->name} <br>";
                }
            }
            echo "-------------------------------------------------<br>";
        }

    }

}