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

      $tableCat= "category";
      $catModel = $this->load->model("CatModel");
      $data['catlist'] = $catModel->catList($tableCat);
    $data['latestPost'] = $postModel->getLatestPost($table);
    
    
    $this->load->view("sidebar",$data);

     $this->load->view("footer");
       }

       public function postDetails($id){
        $this->load->view("header");

        $data=array();
        $tablePost="post";
        $tableCat="category";
        $postModel=$this->load->model('postModel');
        $data['postbyid']=$postModel->getPostById($tablePost,$tableCat,$id);
        
        $this->load->view("details", $data);

       
        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);
        
        $data['latestPost'] = $postModel->getLatestPost($tablePost);
    
        $this->load->view("sidebar",$data);
        $this->load->view("footer");
       }

    public function postByCat($id){
        $this->load->view("header");

        $data=array();
        $tablePost="post";
        $tableCat="category";
        $postModel=$this->load->model('postModel');
        $data['getcat']=$postModel->getPostByCat($tablePost,$tableCat,$id);
       
        $this->load->view("postbycat",$data);
       
        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);
        
        $data['latestPost'] = $postModel->getLatestPost($tablePost);
        $this->load->view("sidebar",$data);
        $this->load->view("footer");

    }
      

}

