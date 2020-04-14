<?php

class CatModel extends DModel{

function __construct(){

    parent::__construct();

}

public function catList(){
   return $this->db->select('category');
    /*
    $sql="select * from category";
    $query=$this->db->query($sql);
   $result= $query->fetchAll();
   return  $result;
    */
}

}