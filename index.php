<?php

//https://stackify.com/display-php-errors/
// odkomentirati kada želimo vidjeti sva upozorenja i greške

/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */



session_start(); 

//https://www.phptutorial.net/php-tutorial/php-__dir__/
define('BP',__DIR__ . DIRECTORY_SEPARATOR 
            . 'app' . DIRECTORY_SEPARATOR);     //__DIR__ magic constant it returns the directory of the file, technically speaking, the __DIR__ is equivalent to the dirname(__FILE__)
                                                    // DIRECTORY_SEPARATOR is actually this \ 


  /* echo BP;  in browser we have seen C:\xampp\htdocs\mvcEnterprise\  directory of file and \(DIRECTORY_SEPARATOR) */
 


$putanje = implode(
  PATH_SEPARATOR,  // this is on windows ;
  [
      BP . 'model',  //C:\xampp\htdocs\mvcEnterprise\model
      BP . 'controller', //C:\xampp\htdocs\mvcEnterprise\controller
      BP . 'admin' //C:\xampp\htdocs\mvcEnterprise\admin
  ]
);

/* echo $putanje; */
 set_include_path($putanje);

spl_autoload_register(function($klasa){
  $putanje = explode(PATH_SEPARATOR,get_include_path());
  foreach($putanje as $p){
      if (file_exists($p . DIRECTORY_SEPARATOR . $klasa . '.php')){
          include $p . DIRECTORY_SEPARATOR . $klasa . '.php';
      }
  }
});

/* echo $_SERVER['PATH_INFO']; */

App::start(); 

/*  
      PATH_SEPARATOR This constant is used to separate paths with the correct character according to the operating system that in windows are separated by ; and in linux by :

      DIRECTORY_SEPARATOR , it is used to place the separator character of directory that in windows is \ and in linux /

      The two constants avoid specifying directories / paths directly (hardcode), which makes the code portable. 


      The implode() function returns a string from the elements of an array
      example!!
      $arr = array('Hello','World!','Beautiful','Day!');
      echo implode(" ",$arr);

      The explode() function breaks a string into an array


*/

