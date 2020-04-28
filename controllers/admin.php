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
   public function addCategory(){
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/addCategory');
    $this->load->view('admin/footer');
   }
public function categoryList(){
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $data     = array();
    $table= "category";
    $catModel = $this->load->model("CatModel");
    $data['cat'] = $catModel->catList($table);
    $this->load->view('admin/category', $data);
    $this->load->view('admin/footer');
}

}


?>