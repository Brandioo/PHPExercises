<?php
session_start();
set_exception_handler(function($error){
    require_once "../index.php";
});

require_once "./sessionStorage.php";
$storage = new SessionStorage("orders");

$errors = [];
$fields = ['product','firstname','lastname','size','address','city'];
$orders = [];


if($_SERVER["REQUEST_METHOD"] == "POST"){
    foreach($fields as $field){
        if(empty($_POST[$field])){
            $errors[] = $field;
        }else{
            $orders[$field] = $_POST[$field];
        }
    }
}

if(count($errors)){
    throw new Exception("Required fields");
}
if(empty($_POST['order_id'])){
    $orderName = "order_".uniqid();
}else{
    $orderName =$_POST['order_id'];
}
$storage->set($orderName, $orders);

if($storage->exists($orderName)){
    header("Location: /ordersTable.php");
}

