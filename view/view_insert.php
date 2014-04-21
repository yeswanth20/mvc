<?php

ini_set("display_errors",1);
require_once "/var/www/mvc/controller/controller.php";
require_once "/var/www/mvc/model/model.php";
class View2
{
         
    public function read(){
    		$f=fopen("/var/www/mvc/view/view_insert.tpl","r+");
		
			while(!feof($f))
					{ 
						echo fgets($f);  //to read file line by line
					}
		
			fclose($f);
			
  
    }
	
}
?>