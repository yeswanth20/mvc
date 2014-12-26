<?php
ini_set("display_errors",1);
require_once '/home/bigc/bugmvc/mvc/model/model.php';
require_once '/home/bigc/bugmvc/mvc/controller/controller.php';
$model=new Model();
$controller;
class View {
	private $model;
	private $controller;
	public function __construct(Model $model) {
		$this->model = $model;
	}
} 
     