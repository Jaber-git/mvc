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
     return $this->db->select($sql);
    }

public function getPostById($tablePost,$tableCat,$id){
    //join query from to table

   // $sql= "SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
   // FROM Orders
   // RIGHT JOIN Employees
    //ON Orders.EmployeeID = Employees.EmployeeID
    //ORDER BY Orders.OrderID";
    //var_dump($id);
    $sql="SELECT  $tablePost.*, $tableCat.name
    FROM $tablePost
    INNER JOIN $tableCat
    ON $tablePost.cat = $tableCat.id
     where $tablePost.id = $id";

//  $sql="SELECT '{$tablePost}'.* , '{$tableCat}'.name FROM 
  // ' {$tablePost}' INNER JOIN '{$tableCat}'
 //   ON '{$tablePost}'.cat = '{$tableCat}'.id
 //   where '{$tablePost}'.id = '{$id}' ";



  $a=$this->db->select($sql);
  //var_dump($a);
  return $a;

         }

 public function getLatestPost($table){
      $sql= "SELECT * FROM $table order by id desc limit 5";
     return $this->db->select($sql);
         }

 public function getPostByCat($tablePost,$tableCat,$id){
    $sql="SELECT  $tablePost.*, $tableCat.name
    FROM $tablePost
    INNER JOIN $tableCat
    ON $tablePost.cat = $tableCat.id
    where $tableCat.id = $id";

$a=$this->db->select($sql);
//var_dump($a);
return $a;
 }
}