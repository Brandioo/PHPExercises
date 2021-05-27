<?php

//Write a function that appends its argument to an array

function appendToArray($val1){
    $lista = [];

    array_push($lista,$val1);
    return $lista;
}

$result=appendToArray(5);
print_r($result);