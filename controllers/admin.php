<?php

class Admin extends JController{

public function __construct(){
    parent::__construct();
   }
 public function Index(){
       $this->admin();
   }
public function admin(){
    $this->load->view('admin/admin');
}

}


?>