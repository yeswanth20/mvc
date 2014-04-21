<?php
ini_set(display_error, 1);
require_once "/var/www/mvc/view/view_read.php";
require_once "/var/www/mvc/model/model.php";
require_once "/var/www/mvc/view/view_insert.php";

class Controller { 
    private $model; 

    public function __construct(Model $model) 
    { 
        $this->model = $model; 
    } 
    
    public function read()
    {
    		
	   $view = new View();
	   $view->read();
	       
	    
	 } 
	public function readx()
	{
	   	$this->text=$_GET['username'];	  	
	   	$this->model->read2($this->text);
	 }  
	public function insert()
	{
	   $view = new View2();
	   $view->read();	
	}
	public function insertx()
	{
	   $this->text2=$_GET['username'];
	   $this->text3=$_GET['password'];		
	   $this->model->insert2($this->text2,$this->text3);
	}
}


if(isset ($_GET['submit1']))
{
	$model = new Model();	
	$controller=new Controller($model);
	$controller->readx();
	
}
if(isset ($_GET['submit2']))
{
	$model = new Model();	
	$controller=new Controller($model);
	$controller->insertx();
	
}


 
//$view = new View($controller, $model);

?>