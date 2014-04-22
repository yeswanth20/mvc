

<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/views/view.php";
require_once "/var/www/mvc/controllers/controller.php";



$model = new Model(); 
//It is important that the controller and the view share the model 
$controller = new Controller($model); 
$view = new View($model); 
echo '<a href="index.php?action=select">select</a><br>' ;
echo '<a href="index.php?action=update">update</a><br>' ;
 //$view->output();
  //echo $_GET['id'];
if (isset($_GET['action'])) 
{
$controller->{$_GET['action']}(); 
}
//var_dump($_POST);
?>
