<?php
ini_set("display_errors",1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');

class Model
{
    public $text;
 
    //public function __construct(){
    	public function read2()
    	{
		$q=mysql_query('select Password from login_users where UserName="prathyusha1"');
		$row = mysql_fetch_assoc($q);
		// while ($row = mysql_fetch_array ($q)) {
		   echo $row['Password'];
        }
		public function insert2()
    	{
    	
        $a=mysql_query("INSERT INTO login_users (UserName,Password) VALUES ('priyanka','priya')");   
        
        if(($a)==1)
		{
			echo "successfully inserted";
		}
		}
}
?>