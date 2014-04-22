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
	public function select($id)
	{
		
		$result = mysql_query('SELECT * FROM bugs where ID='.$id);
	echo '<table >';
    while($row = mysql_fetch_assoc($result))
    {
  
     echo '<tr id=content><td id="cid">'.$row['ID'].'</td><td id="cdescription"><a id="mouse">'.$row['description'].'</a></td><td id="cproject">'.$row['project'].'</td><td id="ccategory">'.$row['category'].'</td><td id="cpriority">'.$row['priority'].'</td><td id="cassignedto">'.$row['assigned_to'].'</td><td id="cstatus">'.$row['status'].'</td></tr>';
  
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
	 
	
	        
} 
//var_dump($_POST);








?>