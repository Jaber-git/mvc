<?php 

include_once 'registry/main.php';
include_once 'registry/registry.class.php';
include_once 'registry/objects/JController.php';

include_once 'registry/objects/DModel.php';

include_once 'registry/databaseobjects/mysql.database.class.php';




$url=isset($_GET['url']) ? $_GET['url']: null ;

if($url!=null){
    var_dump($url);
    $url=rtrim($url,'/');
    $url=explode("/", filter_var($url,FILTER_SANITIZE_URL));
}
else{
    unset($url);
}

//$controller= $url[0]."<br/>";  
//dynamicaly object created
if(isset($url[0])){
    include 'controllers/'.$url[0].'.php';
    //include './controllers/'.$url[1].'.php';
    $ctrlObj=new $url[0]();
    if(isset($url[1])){
        $string = str_replace(' " ', " ", $url[1]);  
        $ctrlObj->$string($url[1]);
         

            }
            else{
                if(isset($url[2])){
                $ctrlObj->$string($url[2]);
                $a = $url[1];
                echo "<br/>";
                var_dump($a);
                
                //dynamically created parameter
                $ctrlObj->$a($url[2]);
                }
            }
    } else{
        include 'controllers/index.php';
    $default=new Index();
    $default->home();
    }


 
 





//$method= $url[1]."<br/>"; 
//$param= $url[2]."<br/>"; 

?>