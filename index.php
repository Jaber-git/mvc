<?php 

include_once './registry/main.php';
include_once './registry/objects/JController.php';
new Main();

echo "->Hello I am jaber from index .<br/>";

$url=$_GET['url'];
var_dump($url);
$url=rtrim($url,'/');
$url=explode("/", $url);

//$controller= $url[0]."<br/>";  
//dynamicaly object created
include './controllers/'.$url[0].'.php';
//include './controllers/'.$url[1].'.php';
$ctrlObj=new $url[0]();

$string = str_replace(' " ', " ", $url[1]);  
 
var_dump($url[1]);
echo $string.'<br/>';
var_dump($string);

 $ctrlObj->$string($url[1]);
$a = $url[1];
var_dump($a);


$ctrlObj->$a();




//$method= $url[1]."<br/>"; 
//$param= $url[2]."<br/>"; 

?>