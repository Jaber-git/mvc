<?php
class Ctrl extends JController {
  
   

public function __construct(){
    echo "->I am from contoller/ctl. <br/>";
    parent::__construct();
    echo "->After parent construct JController I am from contoller/ctl. <br/>";
    

                 }

 public function getmethod($param){
    echo "->This is a method and param is $param";
    }

}