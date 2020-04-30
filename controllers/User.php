
<?php


class User extends JController{
    
    public function __construct(){
         parent::__construct();
         $data     = array();
     }


public function makeUser(){

   }
   public function listUser(){
   
    $tableUser= "tbl_user";
   
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
  
    $userModel = $this->load->model("UserModel");
    $data['users'] = $userModel->userList($tableUser);
    $this->load->view('admin/userlist', $data);
    $this->load->view('admin/footer');
      }


   }
?>