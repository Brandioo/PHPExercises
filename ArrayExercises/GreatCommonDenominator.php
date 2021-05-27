<?php
/*
 * t_06_01.php
 * Given two integers (A and B), find a lowest integer, divisible by both A and B.
 * Design an algorithm (describe it, make a block diagram, implement in PHP).
 */
function findDivider($a, $b) {
    $max = max($a, $b);
    $min = min($a, $b);

    $tempMax = $max;
    while($tempMax % $min != 0) {
        $tempMax += $max;
    }
    return $tempMax;
}
$a = 14;
$b = 4;
$result = findDivider($a, $b);
echo "Result: $result".PHP_EOL;