<?php
/**
 * user model
 */
class UserModel extends DModel{

function __construct(){

    parent::__construct();

}

public function userList($tableCat){
    $sql="select * from $tableCat";
    return $this->db->select($sql);
      
    /* 
    // $query=$this->db->query($sql);
    //$result= $query->fetchAll();
    //return  $result;
      */
   }

public function userById($table,$id){
            $sql="select * from $table where id=:id";
            $data=array(":id"=> $id);

            return $this->db->select($sql,$data);
         }

public function addUser($table,$data){
        return $this->db->insert($table,$data);
          }

public function userUpdate($table,$data,$cond){
      return  $this->db->update($table,$data,$cond);
            }

 public function delUserById ( $table, $cond){
    return  $this->db->delete($table,$cond);
      }

}