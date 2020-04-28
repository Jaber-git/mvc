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
public function insertCategory(){
    $table    = "category";
    $name= $_POST['name'];
    $title= $_POST['title'];

     $data     = array(
              'name'=>$name,
              'title'=>$title
             );   
    $catModel = $this->load->model("CatModel");
    $result   = $catModel->insertCat($table,$data);

    $mdata=array();

    if($result== 1){
     $mdata['msg']="category added succesfully";
    }else{
        $mdata['msg']="Not added succesfully";

    }
    $url=BASE_URL."/Admin/categorylist?msg=".urlencode(serialize($mdata));
    header("Location:$url");
   
}
public function categoryList(){
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $data     = array();
    $table= "category";
    $catModel = $this->load->model("CatModel");
    $data['cat'] = $catModel->catList($table);
    $this->load->view('admin/categorylist', $data);
    $this->load->view('admin/footer');
}

}


?>