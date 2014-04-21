<?php
ini_set("display_errors",1);

class View
{
         
    public function read(){
    		$f=fopen("/var/www/mvc/view/view_read.tpl","r+");
		
			while(!feof($f))
					{
						echo fgets($f);  //to read file line by line
					}
		
			fclose($f);
  
    }
}
?>