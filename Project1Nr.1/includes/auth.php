<?php
session_start();
require_once "./config.php";
require_once "./functions.php";

if(isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username === MY_USERNAME && $password === MY_PASSWORD){
       flash("user", $username);

        header("Location: /?action=dashboard");
        exit;
    }
    header("Location: /?action=login");
    flash('error', "Incorrect password or username");
}

