<?php
require_once "../controller/controller.php";
require_once "../model/model.php";
require_once "../view/view_base.php";
class UserTest extends PHPUnit_Framework_TestCase
{
	public function testread()
	{
		
		
	$model = new Model();	
	$controller=new Controller($model);
	$view = new View($model,$controller);
	$view->model_read();
	
	$mock = $this->getMock('View', array('model_read'));

        $mock
            ->expects($this->exactly(0))
            ->method('model_view')
            ->with(0);
			
      

	}
}
?>