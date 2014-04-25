<?php
ini_set("display_errors",1);
require_once "/home/bigc/newmvc1/mvc/models/model.php";
require_once "/home/bigc/newmvc1/mvc/views/view.php";
$model = new Model(); 
class Controller {
	private $model; 
	private $view;
    public function __construct(Model $model) {
        $this->model = $model; 
		$this->view = new View($model);
    } 
	public function insert(){
		include '/home/bigc/newmvc1/mvc/views/insert.php';
		if(isset($_POST['submit']))
		{
			$this->model->insert($_POST);
		}
	}
	public function select()
	{
		include '/home/bigc/newmvc1/mvc/views/select_id.php';
		if(isset($_POST['select_submit']))
		{
		$this->model->select($_POST['select']);
		}
	}
	public function update()
	{
		include '/home/bigc/newmvc1/mvc/views/update_id_view.php';
		if(isset($_POST['update_submit']))
		{
		$this->view->output($_POST['id']);
		}
	}
	public function delete()
	{
		include'/home/bigc/newmvc1/mvc/views/tabledisplay.php';
		include '/home/bigc/newmvc1/mvc/views/deletev.php';
		if(isset($_POST['delete_submit']))
		{
			$this->model->delete($_POST['selected']);
		}
	}
	public function update_after($data)
	{
		
		echo $this->model->update_after($data);
	}
}
?>