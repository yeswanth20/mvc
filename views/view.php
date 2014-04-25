<?php
ini_set("display_errors",1);
require_once "/home/bigc/newmvc1/mvc/models/model.php";
require_once "/home/bigc/newmvc1/mvc/controllers/controller.php";
$model=new Model();
$controller;
class View { 
    private $model; 
    private $controller; 
     
    public function __construct(Model $model) { 
        
        $this->model = $model; 
	    } 
     
    public function output($id) {
    	
		$row=$this->model->update_before($id);
		if($id == ""){
			echo "Please Enter the Valid ID";
		}
		else
			{
				include '/home/bigc/newmvc1/mvc/views/displaying.php';
		}
		
	}
}
if(isset($_POST['update']))
{
$model=new Model();
$controller=new Controller($model);
$controller->update_after($_POST);	
}   
?>