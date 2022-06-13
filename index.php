<?php

//https://stackify.com/display-php-errors/
// odkomentirati kada želimo vidjeti sva upozorenja i greške

/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */



session_start(); // globalna varijabla na serveru i podaci se pohranjuju dok je session aktivan i sacuvani su na serveru

//echo __DIR__;
define('BP',__DIR__ . DIRECTORY_SEPARATOR);     //__DIR__ magic constant it returns the directory of the file, technically speaking, the __DIR__ is equivalent to the dirname(__FILE__)

echo BP;