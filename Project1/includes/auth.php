<?php
session_start();
require_once "./config.php";

if(isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username === MY_USERNAME && $password === MY_PASSWORD){
        $_SESSION['user'] = $username;

        header("Location: /?action=dashboard");
        exit;
    }
    header("Location: /?action=login");
    $_SESSION['error'] = "Incorrect password or username";
}

