<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/controllers/controller.php";
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
		
		echo '<form action="" method="post" name="update"><table >';
		echo '<tr id=content><td>id:</td><td><input type="text" name="id" value="'. $row['ID'].'"/></td></tr>
		<tr><td>description</td><td id="cdescription"><a id="mouse"><input type="text" name="cdescription"value="'.$row['description'].'"/></a></td></tr>
		<tr><td>project</td><td id="cproject"><input type="text" name="project" value="'.$row['project'].'"/></td></tr>
		<tr><td>category</td><td id="ccategory"><input type="text" name="category" value="'.$row['category'].'"/></td></tr>
		<tr><td>prioirity</td><td id="cpriority"><input type="text" name="priority" value="'.$row['priority'].'"/></td></tr>
		<tr><td>assigned</td><td id="cassignedto"><input type="text" name="assgn" value="'.$row['assigned_to'].'"/></td></tr>
		<tr><td>status</td><td id="cstatus"><input type="text"  name="status" value="'.$row['status'].'"/></td></tr>';
  
    	
	echo '</table><br>
	<input type="submit" name="update"/>
	</form>';
	
		
	}
	
	
	
}
if(isset($_POST['update']))
{
$model=new Model();
$controller=new Controller($model);
$controller->update_after($_POST);	
}   
?>