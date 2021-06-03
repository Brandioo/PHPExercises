<?php

//set_error_handler(function ($error) {
//    echo "Ja Ke Fut Kot"($error);
//});
//
//if (isset($_POST['submit'])) {
////    var_dump($_POST);
////    exit();
//
//    $num1 = trim($_POST['num1']);
//    $num2 = trim($_POST['num2']);
//
////    try {
////        echo $num1 / $num2;
////    } catch (Exception $err) {
////        echo $err->getMessage();
////    }
//
//    echo $num1 / $num2;
//}


//trim -> Heq Hapsirat

//declare(strict_types=1);
//
//function fullName(int $name, int $lastName): int
//{
////    echo fullName(1,2);
//
////    echo "{$name} {$lastName}";
//
//    return $name + $lastName;
//}

//echo fullName(1, 2);


//echo $a ?? 'a has no value!';
//--------------------------------------
//
//$a = 1;
//$b = 2;
//$c = 2;
//
//echo $a <=> $b . "<br>";
//
//echo $b <=> $c . "<br>";
//
//echo $c <=> $a . "<br>";

//--------------------------------------

//echo PHP_VERSION;
$second = [7, 8, 9];
$array = [1, 2, 3, 4, 5, 6];

//foreach ($array as $c) {
//    echo $c . PHP_EOL;
//}

//array_map(function ($item) {
//    echo $item . "<br>";
//}, $array);

//array_map(function ($c) {
//    echo ++$c . PHP_EOL;
//}, $array);

//
//function arrayMap(callable $func, array $test)
//{
//    foreach ($test as $c) {
//        $func($c);
//    }
//}

//array_map(function($c){
//    echo $c . PHP_EOL;
//}, $array);

//arrayMap(function($c){
//    echo $c."<br>";
//}, $array);
//
//function meIMadhSePese($item)
//{
//    echo $item > 5 ? $item : null;
//}
//
//arrayMap("meIMadhSePese", $array);

//arrayMap(function ($c) {
//    echo $c > 5 ? $c . "<br>" : null;
//}, $array);

//--------------------------------------

//$twst=arrayMap(function($item){
//    if($item>5){
//        echo ($item>5);
//    }
////    return $item>5 ? $item : null;
//},$array);
//--------------------------------------------------------------
//array_push($array, $second);
//
//var_dump($array);

//foreach ($second as $c) {
//    $array[] += $c;
//}
//var_dump($array);
//--------------------------------------
//$merge = [$array,$second];
//$secondmerge = array_merge($array, $second);

//var_dump($merge) . "<br>";
//
//var_dump($secondmerge);
//--------------------------------------
//function ids(...$ids){
//    var_dump($ids);
//}
//ids('silvi','lila');



//function division($a,$b){
//    $c = $a/$b;
//
//    return (int) $c;
//}
//
//echo division(1,3);
//----------------------------------------------------------
$a=1;
echo $a ?? 'no value';
//----------------------------------------------------------
