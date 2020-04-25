<?php 
spl_autoload_register(function($class){

include_once "lib/".$class.".php";
     });
      
include_once "config/config.php";
$url=isset($_GET['url']) ? $_GET['url']: null ;

if($url!=null){
    /*** 
     * var_dump($url) ;
     * echo "<br>";
    */
    $url=rtrim($url,'/');
    $url=explode("/", filter_var($url,FILTER_SANITIZE_URL));
   
}
else{
    unset($url);
}

if(isset($url[0])){
      include 'controllers/'.$url[0].'.php';
    
       $ctrlObj=new $url[0]();
     if(isset($url[2])){
    //dynamically created method with parameter
         $a = $url[1];
         $ctrlObj->$a($url[2]);
             }  else{
                     if(isset($url[1])){  
                         $b = $url[1];

                        $ctrlObj->$b();;
                  }
           }
        
     } 
     else{
        
         include 'controllers/Index.php';
     $default=new Index();
     $default->home();
     }
 
 
 //$method= $url[1]."<br/>"; 
 //$param= $url[2]."<br/>"; 
 
 ?>