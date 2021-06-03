<?php
error_reporting(E_ALL);
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo 'Found an error: ' . $errno . '<br /-->';
    echo 'Message: ' . $errstr . '<br>';
    echo 'File: ' . $errfile . ' | Line: ' . $errline . '<br>';
});
function f($a, $b) {
    echo $a . ' ' . $b;
}
//we do something wrong
f(1);