<?php 
spl_autoload_register(function($class){

include_once "lib/".$class.".php";
     });
      
include_once "config/config.php";

$main =new Main();


 ?>