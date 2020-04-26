<?php

/**
 * main class
 */

class Main{
    public $url;
    public $controllerName="Index";
    public $methodName="Index";
    public $controllerPath="controllers/";
    public $controllerObj;
   public function __construct(){
        $this->getUrl();
        $this->loadController();
        $this->callMethod();
    }

   

   public function getUrl(){
                $this->url=isset($_GET['url']) ? $_GET['url'] : NULL ;
                
                if($this->url != NULL){
                $this->url=rtrim($this->url,'/');
                $this->url=explode("/", filter_var($this->url,FILTER_SANITIZE_URL));
              //  echo "from getUrl .'</br>'";
              //  var_dump($this->url);
              return $this->url;  } else{
                        unset($this->url);
                      }
         }
         public function loadController(){
         //   echo "from loadController .'</br>'";
          //  var_dump($this->url);
             if(!isset($this->url[0])){
           //     echo "not set this->url[0] .'</br>'";
           //     var_dump($this->url[0]);
             include $this->controllerPath.$this->controllerName.".php";
               $this->controllerObj=new $this->controllerName();
             }else{
             //   echo "is set this->url[0] .'</br>'";
             //   var_dump($this->url[0]);
                $this->controllerName=$this->url[0];
                $fileName=$this->controllerPath.$this->controllerName.".php";
                 if(file_exists($fileName)){
                     
                     include $fileName;
                //     echo "file exist this->url[0] .'</br>'";
                //     var_dump( $fileName);
                     if(class_exists($this->controllerName)){
                 //       echo "class exist this->url[0] .'</br>'";
                 //       var_dump( class_exists($this->controllerName));
                        $this->controllerObj=new $this->controllerName();
                }else{ header("location".BASE_URL."Index"); }
            }else{ header("location".BASE_URL."Index");} 
         }
  }
  public function callMethod(){
      if(isset($this->url[2])){
       $this->methodName=$this->url[1];
     //  echo "methodName this->url[1] .'</br>'";
      // var_dump($this->methodName);
           if(method_exists($this->controllerObj,$this->methodName)){
              
            $this->controllerObj->{$this->methodName}($this->url[2]);
       //     echo "methodName this->url[1] .'</br>'";
        //    var_dump($this->methodName);
        } else{
               header("location".BASE_URL."/Index");
             }
         }else{
             if(isset($this->url[1])){
                 $this->methodName=$this->url[1];
           //      echo "methodName without parm this->url[1] .'</br>'";
            //     var_dump($this->methodName);
                 if(method_exists($this->controllerObj,$this->methodName)){
                    $this->controllerObj->{$this->methodName}();
                }else{
                    header("location".BASE_URL."/Index");
                }
             }else{
                if(method_exists($this->controllerObj,$this->methodName)){
                    $this->controllerObj->{$this->methodName}();
                }else{
                    header("location".BASE_URL."/Index");
                }

             }
         }

        
    }


  }

?>