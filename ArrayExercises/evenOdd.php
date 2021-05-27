<?php

// Funksioni isEven kontrollon nese nje numer eshte cift apo jo.
// Nese eshte cift kthen true, perndryshe kthen false
function isEven($number) {
    // Mqs mund te shkruhet shkurt vetem me nje rresht, po komentoj zgjidhjen e gjate
    /* $mbetja = $number % 2;
    if ($mbetja == 0) {
        return true;
    } else {
        return false;
    } */

    return $number % 2 == 0 ? true : false;
}

$handle = fopen("php://stdin", 'r');

echo "Jepni numrin qe deshironi te kontrolloni nese eshte cift apo tek:";
echo PHP_EOL;
$nr = trim(fgets($handle));

// Ruaj tek variabli $tipi vleren "cift" ose "tek" per t'ja shfaqur perdoruesit si mesazh
// Nese isEven kthen true, $tipi merr vleren "cift", perndryshe "tek"
$tipi = isEven($nr) ? "cift": "tek";

echo "Numri " . $nr . " eshte numer ". $tipi;
echo PHP_EOL;