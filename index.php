<?php
include (__DIR__.'/controller/controller.php');
ini_set("display_error",1);
include(__DIR__.'/view/home.php');
$controller = new controller($model);
$controller-> loginvalidation($_POST);
//var_dump($_POST);
?>