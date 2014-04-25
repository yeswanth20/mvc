<style>
td
{border-left:1px solid black;
border-top:1px solid black;
width:100px;}
table
{border-right:1px solid black;
border-bottom:1px solid black;}
</style>
<?php
ini_set("display_errors",1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');
		
class Model {
	public $id;
    public function __construct() {
    	 
       
    }
	public function insert($data)
	{
		$sql="INSERT INTO login_users(Name,UserName,Password,Email,gender)
		VALUES('$data[name]','$data[username]','$data[password]','$data[email]','$data[gender]')";
		if (!mysql_query($sql))
		{
			die('Error: ' . mysql_error());
		}
		else{
			echo '<script>alert("Successfully Registered");</script>';
		}
	}
	public function select($id)
	{
		$result = mysql_query('SELECT * FROM bugs where ID='.$id);
		
		echo '<table >';
		while($row = mysql_fetch_assoc($result))
		{
			include '/home/bigc/newmvc1/mvc/views/displaying1.php';	
			
		}
		echo '</table>';
	}
	public function update_before($id)
	{
		$result = mysql_query('SELECT * FROM bugs where ID='.$id);
        $row = mysql_fetch_assoc($result);
		return $row;
    } 
	public function update_after($data)
	{
		$query='UPDATE bugs SET description="'.$data['cdescription'].'",project="'.$data['project'].'",category="'.$data['category'].'",priority="'.$data['priority'].'"
	    ,assigned_to="'.$data['assgn']. '"
	    ,status="'.$data['status']. '"
	 	WHERE ID='.$data['id'].'';
		if($result = mysql_query($query))
		{
			return "updated sucess";
		}
		else {
			return "already updated";
		}
	}
	public function delete($id)
	{
		$deletesql = "DELETE FROM bugs ".
		    "WHERE ID = $id" ;
		$retval = mysql_query( $deletesql);
		if(! $retval )
		{
			die('Could not delete data: ' . mysql_error());
		}
		echo "Deleted data successfully\n";
		//$delete = mysql_query($deletesql);
		
		$rquery = mysql_query('SELECT * FROM bugs');
		echo '<table >';
		echo '<tr><th>ID</th><th>Description</th><th>Project</th><th>category</th><th>Priority</th><th>Assigned To</th><th>Status</th></tr>';
		while($row = mysql_fetch_assoc($rquery))
		{
			
			include '/home/bigc/newmvc1/mvc/views/displaytable.php';
		}
		echo '</table>';
	} 

} 








?>