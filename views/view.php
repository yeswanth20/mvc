<?php
ini_set("display_errors",1);
require_once "/var/www/mvc2/models/model.php";
require_once "/var/www/mvc2/controllers/controller.php";
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
		echo '<form action="" method="post"><table >';
		echo '<tr id=content><td>id:</td><td id="id"><input type="text" value="'.$row['ID'].'"/></td></tr>
		<tr><td>description</td><td id="cdescription"><a id="mouse"><input type="text" value="'.$row['description'].'"/></a></td></tr>
		<tr><td>project</td><td id="cproject"><input type="text" value="'.$row['project'].'"/></td></tr>
		<tr><td>category</td><td id="ccategory"><input type="text" value="'.$row['category'].'"/></td></tr>
		<tr><td>prioirity</td><td id="cpriority"><input type="text" value="'.$row['priority'].'"/></td></tr>
		<tr><td>assigned</td><td id="cassignedto"><input type="text" value="'.$row['assigned_to'].'"/></td></tr>
		<tr><td>status</td><td id="cstatus"><input type="text" value="'.$row['status'].'"/></td></tr>';
  
    	
	echo '</table><br>
	<input type="submit" name="update"/>
	</form>';
	echo "123";
	
    }
	
	
}
	if(isset($_POST['update']))
       {
       $contoller=new Controller($model);
      	$controller->update_after($_POST['id']);
       }
?>