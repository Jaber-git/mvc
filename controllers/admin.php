<?php

class Admin extends JController{

public function __construct(){
    parent::__construct();
   }
public function login(){
    $this->load->view("login");
}


}


?>