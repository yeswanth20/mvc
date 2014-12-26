<?php 
include "/home/bigc/bugmvc/mvc/model/model.php";
class Controller
{
	public $lvresult;
	public function loginvalidation($data)
	{
		
		if(isset($_POST['submit']))
		{
			if(($_POST['UserName'])=="")
			{
				echo"plesae enter values";
			}
			else {
			
			$model=new Model();
			$this->lvresult=$model->loginvalidation($data);
			if($this->lvresult=="success")
			{
				$model->bugsdata();
			}
			}
		}
		if(isset($_POST['register']))
		{
		
			$model=new Model();
			$model -> register($data);
		}
	}
	
}
?>