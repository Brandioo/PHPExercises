<?php
$vector = [2,5,4,7,24,10];

 //function bllok ($vector){
    // $temp = 0;
     for ($i=0; $i < count($vector); $i++){
         for ($j=1; $j< count($vector)-1; $j++)
             if ($vector[$j] > $vector[$j+1]){
                 $temp = $vector[$j+1];
                 $vector[$j+1] = $vector[$j];
                 $vector[$j] = $temp;
             }
     }

 //}
//$result = bllok($vector);
 print_r($vector);