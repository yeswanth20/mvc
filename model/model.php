<?php
ini_set("display_errors",1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');

class Model
{
   // public $text;
	
 
    //public function __construct(){
    	public function read2($text)
    	{
    	//var_dump('select* from login_users where UserName='.$text);
		 $q=mysql_query('select * from login_users where UserName="'.$text.'"');
		 $row = mysql_fetch_assoc($q);
		// while ($row = mysql_fetch_array ($q)) {
		   echo $row['Password'];
        }
		public function insert2($text2,$text3)
    	{
    	
        $a=mysql_query("INSERT INTO login_users (UserName,Password) VALUES ('".$text2."','".$text3."')");   
        
        if(($a)==1)
		{
			echo "successfully inserted";
		}
		}
}
?>