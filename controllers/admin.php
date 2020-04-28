<?php

class Admin extends JController{

public function __construct(){
    parent::__construct();
    Session::checkSession();
 }
 public function Index(){
       $this->admin();
   }
public function admin(){
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/admin');
    $this->load->view('admin/footer');
}

}


?>