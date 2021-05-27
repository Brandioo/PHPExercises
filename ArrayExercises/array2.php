<?php
function returnElOfArray($list,$index,$index2){
    echo $list[$index][$index2];
}

$fullArray=[
    ["test1","test2","test3","test4"],
    ["abc","cde","xdb"],
    [4,60,23,45]
];

returnElOfArray($fullArray,2,0);