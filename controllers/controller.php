<?php
ini_set("display_errors",1);
require_once "/var/www/mvc2/models/model.php";
require_once "/var/www/mvc2/views/view.php";
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
	{
		include '/var/www/mvc2/views/select_id.php';
		if(isset($_POST['select_submit']))
		{
		$this->model->select($_POST['select']);
		}
		//$this->view->selectId();
		//$this->model->select();
	}
public function update()
	{
			
		
		include '/var/www/mvc2/views/update_id_view.php';
		if(isset($_POST['update_submit']))
		{
		$this->view->output($_POST['update']);
		
		}
		
		
		//$this->view->selectId();
		//$this->model->select();
	}
	public function update_after($id)
	{
		echo "123";
		$this->model->update_after($id);
	}
	
}
?>