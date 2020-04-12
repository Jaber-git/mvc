
<?php
/**
 * আমরা এটাকে লডার বলতে পারি
 */
 class Registry {

	function __construct(){
	}
	public function view($fileName){
		include './views/'.$fileName.'.php';
	        }
 }

 ?>