<?php
ini_set("display_errors",1);
require_once "/home/bigc/newmvc1/mvc/models/model.php";
require_once "/home/bigc/newmvc1/mvc/views/view.php";
require_once "/home/bigc/newmvc1/mvc/controllers/controller.php";
$model = new Model(); 
$controller = new Controller($model); 
$view = new View($model);
echo '<a href="index.php?action=insert">Insert</a><br>' ; 
echo '<a href="index.php?action=select">Select</a><br>' ;
echo '<a href="index.php?action=update">Update</a><br>' ;
echo '<a href="index.php?action=delete">Delete</a><br>' ;
if (isset($_GET['action'])) 
{
$controller->{$_GET['action']}(); 
}
?>
