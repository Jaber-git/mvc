<?php
/**
 * 
 * Psot model
 */
class PostModel extends DModel{

function __construct(){

    parent::__construct();

}


public function getAllPost($table){
   
    
    $sql="select * from $table order by id desc limit 3";
   // $query=$this->db->query($sql);
   //$result= $query->fetchAll();

   return $this->db->select($sql);
    
}
}