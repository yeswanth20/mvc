<?php
require_once "/var/www/mvc/controller/controller.php";
require_once "/var/www/mvc/model/model.php";

$model = new Model(); 
$controller=new Controller($model);

$controller->{$_GET['action']}();
?> 