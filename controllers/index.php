<?php
/**
 * index/default/welcome controller
 */
class Index extends JController{

    function __construct(){
        parent::__construct();
    }
public function home(){
   $this->load->view("home");


}
public function category(){
    $data     = array();
    $table= "category";
    $catModel = $this->load->model("CatModel");
    $data['cat'] = $catModel->catList($table);
    $this->load->view("category", $data);
}
public function catById(){
    $data     = array();
    $table    = "category";
    $id       =3;
    $catModel = $this->load->model("CatModel");
    $data['catbyid'] = $catModel->catById($table,$id);
    $this->load->view("catbyid", $data);
    }
}

