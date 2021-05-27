<?php

function circleP ($rreze) {
    return 2 * pi() * $rreze;
}

$handle = fopen("php://stdin", 'r');

echo "Me jep rrezen e rrethit:";
echo PHP_EOL;
$rr = trim(fgets($handle));

$p = circleP($rr);
$roundedPer = round($p, 2);

echo "Perimetri i rrethit me rreze $rr eshte: $p";
echo PHP_EOL;
echo "Perimetri i rrumbullakosur i  rrethit me rreze $rr eshte: $roundedPer";
echo PHP_EOL;