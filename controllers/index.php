<?php
/**
 * index/default/welcome controller
 */
class Index extends JController{

    function __construct(){
        parent::__construct();
    }

public function home(){
   $tableCat= "category";
    $tablePost="post";
    $data=array();

   $this->load->view("header");

   $catModel = $this->load->model("CatModel");
   $data['catlist'] = $catModel->catList($tableCat);
   $this->load->view("search",$data);
   
   $postModel = $this->load->model("PostModel");
   $data['allPost'] = $postModel->getAllPost($tablePost);
   $this->load->view("content",$data);
       
   // $data['catlist'] = $catModel->catList($tableCat); no need to declare two times
    $data['latestPost'] = $postModel->getLatestPost($tablePost);
    
    $this->load->view("sidebar",$data);
    $this->load->view("footer");
       }

   public function postDetails($id){
    $tableCat= "category";
    $tablePost="post";
    $data=array();

    $this->load->view("header");

    $catModel = $this->load->model("CatModel");
    $data['catlist'] = $catModel->catList($tableCat);
    $this->load->view("search",$data);
   
    $postModel=$this->load->model('postModel');
    $data['postbyid']=$postModel->getPostById($tablePost,$tableCat,$id);
    $this->load->view("details", $data);

    $data['latestPost'] = $postModel->getLatestPost($tablePost);
     $this->load->view("sidebar",$data);
     $this->load->view("footer");
       }

  public function postByCat($id){
    $tableCat= "category";
    $tablePost="post";
    $data=array();

    $this->load->view("header");   
    $catModel = $this->load->model("CatModel");
    $data['catlist'] = $catModel->catList($tableCat);
    $this->load->view("search",$data);   

     $postModel=$this->load->model('postModel');
     $data['getcat']=$postModel->getPostByCat($tablePost,$tableCat,$id);
     $this->load->view("postbycat",$data);
       
    $data['latestPost'] = $postModel->getLatestPost($tablePost);
    $this->load->view("sidebar",$data);
    $this->load->view("footer");

    }
      

}

