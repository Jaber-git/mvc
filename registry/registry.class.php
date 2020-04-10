<?php

 
class PHPEcommerceFrameworkRegistry {
	
	
	
	private function __construct()
	{
	
	}
		
	
	/**
	 * Gets data from the current URL
	 * @return void
	 */
	public function getURLData()
	{
    $urldata = (isset($_GET['page'])) ? $_GET['page'] : '' ;                                             
    self::$urlPath = $urldata;
    
		if( $urldata == '' )
		{
			self::$urlBits[] = 'home';
			self::$urlPath = 'home';
    }
    
		else
		{
			$data = explode( '/', $urldata );
			while ( !empty( $data ) && strlen( reset( $data ) ) === 0 ) 
			{
		    	array_shift( $data );
		    }
		    while ( !empty( $data ) && strlen( end( $data ) ) === 0) 
		    {
		        array_pop($data);
		    }
			self::$urlBits = $this->array_trim( $data );
		}
	}
	
	
	

	
}
?>