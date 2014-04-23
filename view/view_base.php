<?php

ini_set("display_errors",1);
require_once "/var/www/mvc/controller/controller.php";
require_once "/var/www/mvc/model/model.php";

class View
{
      
   private $model; 
   private $controller;
   
 
  
    public function __construct(Model $model,Controller $controller) 
    {   
    	
        $this->model = $model; 
		$this->controller=$controller;
    }
   
   
    public function read_readtpl(){
    		$f=fopen("/var/www/mvc/view/view_read.tpl","r+");
		
			while(!feof($f))
					{ 
						echo fgets($f);  //to read file line by line
					}
		
			fclose($f);
			
	  }
	 
	public function read_inserttpl(){
			
    		$f=fopen("/var/www/mvc/view/view_insert.tpl","r+");
			while(!feof($f))
					{ 
						echo fgets($f);  //to read file line by line
					}
		
			fclose($f);
			
  
    }
	
	public function model_read()
	{
	   	$text1=$_GET['username'];	  	
	   	$a=$this->model->read_data($text1);
		echo "<h1>".$a."</h1>";
	 }
	
	public function model_insert()
	{
	   $text2=$_GET['username'];
	   $text3=$_GET['password'];
	   $b=$this->model->insert_data($text2,$text3);
	   echo "<h1>".$b."</h1>";
	}
	
	
}
$model = new Model();	
$controller=new Controller($model);
$view = new View($model,$controller);

if(isset ($_GET['submit1']))
{
	$view->model_read();
}

if(isset ($_GET['submit2']))
{
	$view->model_insert();
}	

?>