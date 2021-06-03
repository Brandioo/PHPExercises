<?php
/*
 * t_05_08.php
 * Create an array of random numbers.
 * Create a function that will output every even number from this array.
 * Additionally, the program must stop after zero was found (using break).
 * The program must also bypass every index divided by 5 (using continue).
 */

//$arr = [rand(0,100), rand(2,20), rand(9, 30), rand(0, 9)];
$arr = [4, 5, 8, 20, 4, 24, 7, 0, 12];

function arrayOutput($vector) {
    $evenNumbers = [];
    for($index=0; $index < count($vector); $index++) {
        if($index % 5 == 0) {
            echo "Index ($index) is divided by 5. Continue!".PHP_EOL;
            continue;
        }
        if($vector[$index] % 2 == 0) {
            array_push($evenNumbers, $vector[$index]) ;
        }
        if($vector[$index] == 0) {
            echo 'Element zero found. Break!'.PHP_EOL;
            break;
        }

    }
    return $evenNumbers;
}
//print_r($arr);
$result = arrayOutput($arr);
print_r($result);