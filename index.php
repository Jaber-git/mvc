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

//$controller= $url[0]."<br/>";  
//dynamicaly object created
if(isset($url)){
    
   /**  echo "this is $url[2].'<br>'";
     *    echo $url[1];
     *    var_dump($url) ;
     */
    
    include 'controllers/'.$url[0].'.php';
    //include './controllers/'.$url[1].'.php';
      $ctrlObj=new $url[0]();
   /** 
   *  echo "<br>";
   * echo "<br>";
   * var_dump($ctrlObj) ;
   * echo "this is url1 <br>";
   *  echo $url[1] ;
   */
   
 //dynamically created method with parameter
            $a = $url[1];
           
        $ctrlObj->$a($url[2]);
         
       
    } 
    else{
       
        include 'controllers/Index.php';
    $default=new Index();
    $default->home();
    }


//$method= $url[1]."<br/>"; 
//$param= $url[2]."<br/>"; 

?>