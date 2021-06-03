<?php
require_once "config.php";

function flash($key, $message){
    $_SESSION[$key] = $message;
}

function merr($key){
    return $_SESSION[$key];
}

function DHL(){
    return DEFAULT_PRICE + DHL_PRICE;
}

function FEDEX(){
    return DEFAULT_PRICE + FEDEX_PRICE;
}

function ADEX(){
    return DEFAULT_PRICE + ADEX_PRICE;
}
