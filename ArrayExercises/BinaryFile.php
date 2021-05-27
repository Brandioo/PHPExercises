<?php
// Binary search
$vector = [3, 4, 5, 6, 7, 8, 9];
$key = 5;
function binarySearch($vector, $key) {
    $low = 0;
    $high = count($vector) - 1;
    while ($low <= $high) {
        echo 'inside while ---'.PHP_EOL;
        $mid = floor(($low + $high)/2);
        if($vector[$mid] == $key) {
            return "Element $key found at index: $mid";
        } else if ($vector[$mid] > $key) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return "Element not found;".PHP_EOL;
}
$result = binarySearch($vector, $key);
echo $result;