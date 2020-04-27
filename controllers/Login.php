<?php

class Login extends JController{

public function __construct(){
    parent::__construct();
   }
   public function Index(){
       $this->login();
   }
public function login(){
    $this->load->view("login/login");
}
public function logAuth(){
    $table="tbl_user";
    
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $loginModel = $this->load->model("loginModel");
    $count=$loginModel->userControl($table,$username,$password);

    if($count> 0){
      $result= $loginModel->getUserData($table,$username,$password);
     // print_r($result);
     // echo $result[0]['username'];
      Session::init();
      Session::set("username", $result[0]['username']);
      Session::set("userId", $result[0]['id']) ;
     // echo Session::get('userId');
     header('Location:http://localhost/mvc/Admin');
  
    } else{
     header('location: http://localhost/mvc/Login');
        }

   }
}