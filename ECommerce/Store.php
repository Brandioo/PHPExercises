<?php

//require_once "./Products.php";
class Store
{
    public $name;
    public $domain;
    public $language;

    public $users = [];
    public $products = [];
    public $categories = [];
    public $orders = [];

    public function __construct($name, $domain, $language)
    {
        $this->name = $name;
        $this->domain = $domain;
        $this->language = $language;
    }

    /**
     * @param array $users
     */
    public function setUsers(Users $user): void
    {
        $this->users[] = $user;
    }

    /**
     * @param array $products
     */
    public function setProducts(Products $products): void
    {
        $this->products[] = $products;
    }

    /**
     * @param array $categories
     */
    public function setCategories(Categories $categories): void
    {
        $this->categories[] = $categories;
    }

    /**
     * @param array $orders
     */
    public function setOrders(Orders $orders): void
    {
        $this->orders[] = $orders;
    }

    public function printAll()
    {
        echo "Store Name: {$this->name} | | Store Domain: {$this->domain} | | Language: {$this->language}<br>";
        echo "----------------------------------------------------------------------------- <br>";
//            foreach ($category->products as $product) {
//                echo "Product Name: {$product->name}<br>";
//                echo "Product Quantity: {$product->quantity}<br>";
//                echo "Product Price: {$product->price}<br>";
//            }

        foreach ($this->categories as $category) {
            echo "Category Name: {$category->name} | | Category Description: {$category->description} <br>";
            foreach ($category->products as $product) {
                echo "Product Name: {$product->name}<br>";
                echo "Product Quantity: {$product->quantity}<br>";
                echo "Product Price: {$product->price}<br>";
                echo "----------------------------------<br>";
            }
            foreach ($category->subCategories as $subCategory) {
                echo "Sub Category: {$subCategory->name}<br>";
                foreach ($subCategory->products as $product) {
                    echo "Product Name: {$product->name}<br>";
                    echo "Product Quantity: {$product->quantity}<br>";
                    echo "Product Price: {$product->price}<br>";
                    echo "----------------------------------<br>";
                }
            }
        }

        foreach ($this->orders as $order) {
            echo "Order ID: {$order->orderID} | | Name: {$order->product->name} | | Quantity: {$order -> quantity} | | Order Date: {$order->orderDate} | | Price: {$order->shippingMethod->price} <br>";
//            foreach ($order->shippingMethods as $shippingMethod) {
//                echo "Shipping Method Name: {$shippingMethod->name}<br>";
//                echo "Shipping Method Price: {$shippingMethod->price}<br>";
//                echo "Shipping Method Duration: {$product->duration}<br>";
//                echo "-----------------<br>";
//            }
        }
    }
}