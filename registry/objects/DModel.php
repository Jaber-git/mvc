<?php 
/**
 * Main Model
 * 
 */
 class DModel{

    protected $db=array();

    public function __construct(){
        $dsn  = "mysql:dbname=bd_mvc;host=localhost";
        $user = "root";
        $pass  = "";
       
      $this->db = new Database($dsn, $user, $pass);  
    }
   public function select($sql,$data=array()){
     $stmt=$this->prepare($sql);
      foreach($data as $key => $value){
          $stmt->bindParam($key,$value);
      }
     $stmt->execute();
     return $stmt->fetchAll();

   }

 }