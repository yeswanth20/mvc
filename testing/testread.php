<?php
require_once "../controller/controller.php";
require_once "../model/model.php";
require_once "../view/view_base.php";
class UserTest extends PHPUnit_Framework_TestCase
{
	public function testread()
	{
		
	$_GET['username'] = 'priyanka';	
		
	$model = new Model();	
	$controller=new Controller($model);
	$view = new View($model,$controller);
		
	$this -> assertTrue ($view->model_read() == 'priya');


	/*$mock = $this->getMock('View', array('model_read'));

        $mock
            ->expects($this->any())
			->method('model_view')
            ->will($this->returnValue('foo'));

        $this->assertEquals('foo', $view->model_read());*/
	
	}
	
	public function testinsert()
	{
		
	$_GET['username'] = 'abcd';	
	$_GET['password'] = 'ab';
		
	$model = new Model();	
	$controller=new Controller($model);
	$view = new View($model,$controller);
		
	$this -> assertTrue ($view->model_insert() == 'successfully inserted');
	
}
}
?>