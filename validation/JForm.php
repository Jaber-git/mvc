<?php
/**
 * form validation
 */
class Dform{
    public $currentValue;
    public $values=array();
    public $errors=array();
    function __construct(){
     }
     public function post($key){
     
     $this->values[$key]= trim($__POST[key]);
    $this->currentValue=$key;
    return $this;
    }
    public function isEmpty($key){
if( empty( $this->values[$this->currentValue])){
   $this->errors[$this->currentValue]['empty']="file must not be empty";

}
return $this;
 }
 public function length($min=0,$max){
     if(strlen($this->values[$this->currentValue])<$min OR strlen($this->values[$this->currentValue])>$max){
        $this->errors[$this->currentValue]['empty']="Should min".$min." And Max ".$max." characters.";
      }
      return $this;
    }
public function submit(){
    if(empty($this->errors)){
     return true;
   }else{
       return false;
   }

   }
   
}
?>