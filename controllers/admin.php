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
  // $data['user']=array(
  //     'username' => Session::get('username')
  // );
    $this->load->view('admin/admin',);
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
public function editCat($id){
    $data      = array();
    $table    = "category";
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
 
    $catModel = $this->load->model("CatModel");
    $data['catById'] = $catModel->catById($table,$id);
   
    $this->load->view("admin/editcat",$data);
  
    $this->load->view('admin/footer');
     
}

    
 
public function updateCat($id=NULL){

  $table = "category";
  
  $name  = $_POST['name'];
  $title = $_POST['title'];

  $cond  = "id=$id";
  $data  = array(
              'name'=>$name,
              'title'=>$title
             );  
             
  
  $catModel = $this->load->model("CatModel");
  $result   =  $catModel->catUpdate($table,$data,$cond);

  $mdata    =array();
    if($result== 1){
     $mdata['msg']="category updated succesfully";
    }else{
        $mdata['msg']="Not updated succesfully";

    }
    $url=BASE_URL."/Admin/categorylist?msg=".urlencode(serialize($mdata));
    header("Location:$url"); 
   }
public function deleteCat($id=NULL){
    $table   ="category";
    $cond     ="id=$id";
    $catModel =$this->load->model("CatModel");
    $result=  $catModel->delCatById($table,$cond);

    
  $mdata    =array();
  if($result== 1){
   $mdata['msg']="category deleted succesfully";
  }else{
      $mdata['msg']="Not deleted succesfully";

  }
  $url=BASE_URL."/Admin/categorylist?msg=".urlencode(serialize($mdata));
  header("Location:$url"); 
   }

   public function addArticle(){
       $tableCat="category";
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');

    $catModel       = $this->load->model("CatModel");
    $data['catlist'] = $catModel->catList($tableCat);
    
    $this->load->view('admin/addPost',$data);
    $this->load->view('admin/footer');
   }

   public function addNewPost(){
   //IF YOU TYPE URL admin/addarticle,see error
   //to solve use if-ele
    if(!($_POST)){
        header("Location:".BASE_URL."/Admin/addArticle");
    }
    $tablePost="post";
   $input= $this->load->validation("JForm");
   $input->post('title')
          ->isEmpty()
          ->length(10,500);
     $input->post('content')
           ->isEmpty();
     $input->post('cat')
           ->isEmpty()
           ->isCatEmpty();
       
if($input->submit()){
    $title   = $input->values['title'];
    $content =  $input->values['content'];
    $cat     =  $input->values['cat'];
    $data     = array(
              'title'   =>$title,
              'content' =>$content,
              'cat'     =>$cat
             );   
    $catModel = $this->load->model("PostModel");
    $result   = $catModel->insertPost($tablePost,$data);

    $mdata=array();

    if($result== 1){
     $mdata['msg']="Article added succesfully";
    }else{
        $mdata['msg']="Article Not added succesfully";
       }
    $url=BASE_URL."/Admin/articleList?msg=".urlencode(serialize($mdata));
    header("Location:$url");
}else{
    $data['postErrors']=$input->errors;
    $tableCat="category";
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');

    $catModel       = $this->load->model("CatModel");
    $data['catlist'] = $catModel->catList($tableCat);
    
    $this->load->view('admin/addPost',$data);
    $this->load->view('admin/footer');
}


    

   }
   public function articleList(){
    $tableCat = "category";
    $tablePost = "post";
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    
    $postModel = $this->load->model("PostModel");
    $data['listPost'] = $postModel->getPostList($tablePost);
   
    $catModel = $this->load->model("CatModel");
    $data['catlist'] = $catModel->catList($tableCat);
    
    $this->load->view('admin/postList',$data);
    $this->load->view('admin/footer');
}

}


?>