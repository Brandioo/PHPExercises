<?php
/*
Write a function appending given numbers to an array.
Function must work until we type “0”.
Then it should print all the values
​
*/

$numbers=[];

function appendToArray($vector, $nr){
    array_push($vector,$nr);
    return $vector;
}
$handle = fopen('php://stdin','r');

do{
    echo "Give Me A Nr".PHP_EOL;
    $a=trim(fgets($handle));
    $numbers= appendToArray($numbers,$a);
} while($a!=0);

print_r($numbers);