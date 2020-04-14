
<?php
/**
 * আমরা এটাকে লডার বলতে পারি
 */
 class Registry {

	function __construct(){
	}
  public function view($fileName,$data=NULL){
		include './views/'.$fileName.'.php';
	        }
 
  public function model($modelName){
	include './models/'.$modelName.'.php';

	  return new $modelName();
		}


	 
	
	}

?>