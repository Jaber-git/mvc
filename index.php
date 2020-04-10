<?php 

include_once './registry/main.php';

new Main();

echo "Hello I am jaber from index .<br/>";

$url=$_GET['url'];
$url=rtrim($url,'/');
$url=explode("/", $url);

$controller= $url[0]."<br/>";  

include './controllers/'.$url[0].'.php';
new $url[0]();


//$method= $url[1]."<br/>"; 
//$param= $url[2]."<br/>"; 

?>