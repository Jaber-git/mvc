<?php

class CatModel extends DModel{

function __construct(){

    parent::__construct();

}

public function catList($table){
   return $this->db->select($table);
    /*
    $sql="select * from category";
    $query=$this->db->query($sql);
   $result= $query->fetchAll();
   return  $result;
    */
}

public function catById($table,$id){

$sql="select * from $table where id=:id";
$stmt=$this->db->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
return $stmt->fetchAll();

}

}