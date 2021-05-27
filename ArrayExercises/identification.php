<?php

function getBirthDate($id){
    $year = substr($id,0,2);
    $month = substr($id,2,2);
    $day = substr($id,4,2);

    echo $day."-".$month."-".$year;
}
getBirthDate("700");