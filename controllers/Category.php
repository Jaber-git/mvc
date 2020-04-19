<?php
/**
 * category controller
 */

 class Category extends JController{
    
   public function __construct(){
        parent::__construct();
    }
    public function categoryList(){
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
  
   public function addCategory(){
      $this->load->view("addCategory");
  
   }
  
      public function insertCategory(){
          $table    = "category";
              $name= $_POST['name'];
              $title= $_POST['title'];
  
           $data     = array(
                    'name'=>$name,
                    'title'=>$title
                   );   
          $catModel =$this->load->model("CatModel");
          $result=$catModel->insertCat($table,$data);
  
          $mdata=array();
          if($result== 1){
           $mdata['msg']="category added succesfully";
          }else{
              $mdata['msg']="Not added succesfully";
  
          }
          $this->load->view("addCategory",$mdata);
      }
      public function updateCat(){

        $table = "category";
        $cond  = "id=1";
        $data  = array(
            'name'=>'coding',
            'title'=>'coding'
             );
        $catModel=$this->load->model("CatModel");
        $catModel->catUpdate($table,$data,$cond);


      }
  
 }

?>