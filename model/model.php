<?php	
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');
class Model {
public function loginvalidation($data)
{
//var_dump($data);

 $UserNamef = $data['UserName'];
	$Passwordf = $data['Password'];
	$checklogin = mysql_query('SELECT * from login_users where UserName = "'. $UserNamef.'" ') or die(mysql_error());
 $row = mysql_fetch_array($checklogin);
//var_dump($row);
 $UserNamedb = $row['UserName'];
 $Passworddb = $row['Password'];
// var_dump($Passwordf);
 //comparison start
 if($UserNamef != $UserNamedb)
  {
echo "Your account was not found, please try again.";
 }
 else
 {
 if($Passwordf != $Passworddb)
 {
 echo "Password is incorrect";
 }
 else
 {
 $_SESSION['UserName2']= $_POST['UserName'];
 return "success";	
 }
 }
 	
}
public function bugsdata()
{
include "/home/bigc/bugmvc/mvc/view/bugs_page.php";
}
public function register($data)
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
}
?>