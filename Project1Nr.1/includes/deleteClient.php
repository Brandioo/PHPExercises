<?php
include_once "./config.php";
require_once "./sessionStorage.php";

$deleteSession = new SessionStorage('clients');

$key =  $_GET['key'];
$deleteSession->delete($key);
if(!$deleteSession->exists($key)){
    header("Location: /?action=clients");
}