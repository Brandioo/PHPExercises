<?php

require_once "./Products.php";
require_once "./BillingAddress.php";
require_once "./Categories.php";
require_once "./Client.php";
require_once "./Orders.php";
require_once "./ShippingMethod.php";
require_once "./Store.php";
require_once "./Users.php";


$store = new Store("Sweet Store", "Albania", "English");

$category = new Categories("(Chocolate) Sweets By Hand", "Made With Secret Ingridient", "super.php");
$subCategory1 = new Categories("Chocolate", "Vanilla Ice Cream", "photo.url");
$productVanilla = new Products("Chocolate Ice Cream", 10, 100, "One Cup 100 ALL", "photo.url", $subCategory1);

$product1 = new Products("Cake", 12, 150, "Chocolate Cake", "super.php", $category);
$product2 = new Products("Cookies", 10, 80, "Chocolate Cookies", "super1.php", $category);
$product3 = new Products("Chocolate", 5, 150, "Chocolate Sweet", "super.php", $category);

$category->setProducts($product1);
$category->setProducts($product2);
$category->setProducts($product3);

$subCategory1->setProducts($productVanilla);
$category->setSubCategories($subCategory1);

$store->setCategories($category);

$order1 = new Orders(1, 2, "7/3/2021");
$billingAddress1 = new BillingAddress("Brandio", "Cheetos", "Bulevardi", "Tirana", 1, "1111");
$client1 = new Client("Brand", "Citozi", "citozibrand@gmail.com", $billingAddress1);
$shipping1 = new ShippingMethod("Motor Delivery", 2 * 150, "15 minutes");
$order1->setProduct($product1);
$order1->setClient($client1);
$order1->setShippingMethod($shipping1);

$store->setOrders($order1);


$order2 = new Orders(1, 1, "7/3/2021");
$billingAddress2 = new BillingAddress("Xhoi", "Hysa", "Fresku", "Tirana", 1, "1111");
$client2 = new Client("Xhoi", "Hysa", "xhoiHysa@gmail.com", $billingAddress2);
$shipping2 = new ShippingMethod("Motor Delivery", 200, "15 minutes");

$order2->setProduct($productVanilla);
$order2->setClient($client2);
$order2->setShippingMethod($shipping2);

$store->setOrders($order2);


$store->printAll();




