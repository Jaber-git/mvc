<?php
/**
 * loginModel Model
 */
class LoginModel extends DModel{

public function __construct(){
    parent::__construct();
       }

    public  function userControl($table,$username,$password){
        $sql="select * from $table WHERE username=? and password=?";
       return $this->db->affectedRows($sql,$username,$password);
        
      }

     public  function getUserData($table,$username,$password){
        $sql="select * from $table WHERE username = ? and password = ? ";
       return $this->db->selectUser($sql,$username,$password);
        
      }


}


?>