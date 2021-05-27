<?php


function minimalAbs($nr1, $nr2, $nr3)
{
    //    $nr1 = abs($nr1);
    //    $nr2 = abs($nr2);
    //    $nr3 = abs($nr3);
    //    return min($nr1, $nr2, $nr3);

    return min(abs($nr1), abs($nr2), abs($nr3));
}

echo minimalAbs(4, 3, -2);
echo PHP_EOL;