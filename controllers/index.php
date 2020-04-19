<?php
/**
 * index/default/welcome controller
 */
class Index extends JController{

    function __construct(){
        parent::__construct();
    }

public function home(){
   $this->load->view("header");
      $data      = array();
      $table     = "post";
      $postModel = $this->load->model("PostModel");
      $data['allPost'] = $postModel->getAllPost($table);
 
   $this->load->view("content",$data);
   $this->load->view("sidebar");
   $this->load->view("footer");
       }

       public function postDetails(){

       }

}

