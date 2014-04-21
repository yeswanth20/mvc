<?php
ini_set(display_error, 1);
require_once "/var/www/mvc/view/view_read.php";

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
	 // echo "pp";
	   if (isset ($_GET['submit']))
	   {
	   	echo "hi";
	   	$this->model->read2();
	   }
	   
    } 
	
	public function insert()
	{
	   $this->model->insert2();
	}
}
 
//$view = new View($controller, $model);

?>