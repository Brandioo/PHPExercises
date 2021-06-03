<?php
require_once "./config.php";
require_once "./sessionStorage.php";

$userSession = new SessionStorage("clients");

if(isset($_POST)){
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);

    if(empty($firstname) || empty($lastname) || empty($email)){
        throw new Exception("Field required");
    }

    $userSession->set("client_{$firstname}", [
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email
    ]);

    header("Location: /?action=clients");
}