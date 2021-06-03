<?php
//$handle = fopen("test.txt", "r");
//while (!feof($handle)) {
//    $line = fgets($handle);
//    echo $line;
//}
//fclose($handle);

//$handle = fopen("template.csv", "r");
//$arr=[];
//$arr=fgetcsv($handle);
//var_dump($arr);
//
//fclose($handle);

//-------------------------------------------------
//$result = file_get_contents("test.txt");
//var_dump($result);
//
//
//$string=file_get_contents("http://sdacademy.dev");

$handle = fopen("test.txt", "a");

if(filesize("test.txt")===0){
    $headers=['First Name', 'Last Name', 'Email'];
    fputcsv($handle, $headers);
}

$array = ['Brand', 'Citozi', 'bcitozi@gmail.com'];

fputcsv($handle, $array);

$data = [
    ['silvi', 'lila', 'silvilila@gmail.com'],
    ['filan', 'fisteku', 'filanfisteku@gmail.com']
];
foreach ($data as $items) {
    fputcsv($handle, $items);
}
fclose($handle);




