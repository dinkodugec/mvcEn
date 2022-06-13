<?php

//https://stackify.com/display-php-errors/
// odkomentirati kada želimo vidjeti sva upozorenja i greške

/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */



session_start(); // globalna varijabla na serveru i podaci se pohranjuju dok je session aktivan i sacuvani su na serveru

//https://www.phptutorial.net/php-tutorial/php-__dir__/
define('BP',__DIR__ . DIRECTORY_SEPARATOR);     //__DIR__ magic constant it returns the directory of the file,echnically speaking, the __DIR__ is equivalent to the dirname(__FILE__)
                                                    // DIRECTORY_SEPARATOR is actually this \ 


$putanje=implode(
  PATH_SEPARATOR,
  [
      BP . 'model',
      BP . 'controller'
  ]
);


//echo $putanje;
set_include_path($putanje);

spl_autoload_register(function($klasa){
  $putanje = explode(PATH_SEPARATOR,get_include_path());
  foreach($putanje as $p){
      if (file_exists($p . DIRECTORY_SEPARATOR . $klasa . '.php')){
          include $p . DIRECTORY_SEPARATOR . $klasa . '.php';
      }
  }
});

App::start();