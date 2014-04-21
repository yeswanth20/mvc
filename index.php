<?php
require_once "/var/www/mvc/controller/controller.php";
require_once "/var/www/mvc/model/model.php";
require_once "/var/www/mvc/view/view_read.php";

$model = new Model(); 
$controller=new Controller($model);
if(isset($_GET['action']))
{
	$controller->{$_GET['action']}();
}
/*else
{
$view = new View();
$view->read();
}*/
?> 