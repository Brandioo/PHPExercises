<?php
session_start();
//TODO delete product
require_once "./sessionStorage.php";
$storage = new SessionStorage('orders');
$order_id = $_GET['order_id'];
$storage->delete($order_id);

if($storage->exists($order_id)){
    throw new Exception("Item with order Id : {$order_id} is not deleted");
}

header("Location: /ordersTable.php");
