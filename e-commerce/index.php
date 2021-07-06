<?php
session_start();
require_once "./Store.php";
require_once "./Product.php";
require_once "./Category.php";
require_once "./User.php";
require_once "./storage.php";

$storage = new SessionStorage();
//Krijo nje store
$store = new Store("Silvi-Store", "silvi-store.com", "EN_en");

//Krijo user dhe shtoje ne store
$adminUser = new User("Silvi", "Lila", "silvi@mail.com", "test", "SuperAdmin");
$store->setUser($adminUser);

//Krijo kategori dhe shtoje ne store
$nikeCategory = new Category("Nike","Super rroba", "#");
$jordanSubCategory = new Category("Jordan", "Alamet rrobash", "#");
$nikeCategory->setCategory($jordanSubCategory);

$adidasCategory = new Category("Addidas", "Kto sjan nai gjo", "#");
$store->setCategory($nikeCategory);
$store->setCategory($adidasCategory);

//Krijo produkt dhe shtoje ne store
$product1 = new Product("Produt1",10, "$50", "Pershkrimi", "#");
$product2 = new Product("Produt2",10, "$50", "Pershkrimi", "#");
$product3 = new Product("Produt3",10, "$50", "Pershkrimi", "#");
$product4 = new Product("Produt4",10, "$50", "Pershkrimi", "#");
$product5 = new Product("Jordan product", 10, "$50", "Pershkrimi", "#");
$store->setProduct($product1);
$store->setProduct($product2);
$store->setProduct($product3);
$store->setProduct($product4);
$store->setProduct($product5);


//Shto produkete ne kategori
$nikeCategory->setProduct($product1);
$nikeCategory->setProduct($product2);
$jordanSubCategory->setProduct($product5);

$adidasCategory->setProduct($product3);
$adidasCategory->setProduct($product4);


$store->printAll();






