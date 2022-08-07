<?php
// Method that autoloads any classes when a objects of that class is created
spl_autoload_register('autoLoader');

function autoLoader($className){
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  //condition that checks which file from which folder is calling this method and set path accordinly.
  if (strpos($url, 'includes') !== false){
    $path = '../classes/';
  }
  else{
    $path = 'classes/';
  }

  $extention = '.class.php';
  $fullPath = $path . $className . $extention;

  if(!file_exists($fullPath)){
    return false;
  }

  require_once $fullPath;
}
 