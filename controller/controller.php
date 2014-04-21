<?php
ini_set(display_error, 1);


class Controller { 
    private $model; 

    public function __construct(Model $model) 
    { 
        $this->model = $model; 
    } 
    
    public function read()
    {         
	   $this->model->read2();
    } 
	
	public function insert()
	{
	   $this->model->insert2();
	}
}
 
//$view = new View($controller, $model);

?>