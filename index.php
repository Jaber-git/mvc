<?php 

include_once './registry/main.php';

new Main();

echo "Hello I am jaber from index ";

$url=$_GET['url'];
$url=rtrim($url,'/');
$url=explode("/", $url);

$controller= $url[0]."<br/>";  

$method= $url[0]."<br/>"; 
$param= $url[0]."<br/>"; 

?>