<?php
ini_set("display_errors",1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');

class Model
{
   public $uname;
	
 
    //public function __construct(){
    	public function read_data($text1)
    	{
    	//var_dump('select* from login_users where UserName='.$text);
		 $q=mysql_query('select * from login_users where UserName="'.$text1.'"');
		 $row = mysql_fetch_assoc($q);
		// while ($row = mysql_fetch_array ($q)) {
		   return $row['Password'];
        }
		public function insert_data($text2,$text3)
    	{
    	
        $a=mysql_query("INSERT INTO login_users (UserName,Password) VALUES ('".$text2."','".$text3."')");   
        
        if(($a)==1)
		{
			return"successfully inserted";
		}
		}
}
?>