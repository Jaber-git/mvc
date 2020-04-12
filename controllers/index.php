<?php
/**
 * index/default/welcome controller
 */
class Index extends JController{

    function __construct(){
        parent::__construct();
    }
public function home(){
    echo "Home content from index controller";
}

}