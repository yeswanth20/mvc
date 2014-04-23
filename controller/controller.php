<?php

require_once "/var/www/mvc/view/view_base.php";
require_once "/var/www/mvc/model/model.php";


class Controller { 
    private $model; 

    public function __construct(Model $model) 
    { 
        $this->model = $model; 
    } 
    
    public function read()
    {
    
       $controller=new Controller($this->model);	
	   $view = new View($this->model,$controller);
	   $view->read_readtpl();
	 	    
	 } 
	
	public function insert()
	{
	   $controller=new Controller($this->model);
	   $view1 = new View($this->model,$controller);
	   $view1->read_inserttpl();	
	}
	
}


 
//$view = new View($controller, $model);

?>