<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/views/view.php";
require_once "/var/www/mvc/controllers/controller.php";



$model = new Model(); 
//It is important that the controller and the view share the model 
$controller = new Controller($model); 
$view = new View($controller, $model); 
echo $view->output();


?>