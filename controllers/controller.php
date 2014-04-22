<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/views/view.php";
$model = new Model(); 
//It is important that the controller and the view share the model 
/*$controller = new Controller($model); 

if(isset($_POST['select']))
{
 $controller->select_id();
}
*/

class Controller { 
    private $model; 
	private $view;
    public function __construct(Model $model) {
    	 
        $this->model = $model; 
		$this->view = new View($model);
    } 

public function select()
	{echo 1;
		include '/var/www/mvc/views/select_id.php';
		if(isset($_POST['select_submit']))
		{
		$this->model->select($_POST['select']);
		}
		//$this->view->selectId();
		//$this->model->select();
	}
public function update()
	{
			
		include '/var/www/mvc/views/update_id_view.php';
		if(isset($_POST['update_submit']))
		{
		$this->view->output($_POST['id']);
		//var_dump($_POST);
		}
		
		
		
		//$this->view->selectId();
		//$this->model->select();
	}
	
	public function update_after($data)
	{
		
		echo $this->model->update_after($data);
	}
	
}

//var_dump($_POST);

?>