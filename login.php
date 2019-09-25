<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
 
if(isset($_REQUEST['uname']))
{
	$uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
	$pwd = mysqli_real_escape_string($link, $_REQUEST['pwd']);

	$sql = mysqli_query($link,"SELECT * FROM signup WHERE uname='$uname'AND pwd='$pwd'");
	$res=mysqli_num_rows($sql);

	if($res==1)
	{
    	/*echo "logged in successfully.";
    	exit();*/
    	$_SESSION["uname"]=$uname;
    	header("Location: home1.php");
	} 
	else
	{
    	echo "entered wrong password ";
    	exit();
	}
}
// Escape user inputs for security

 
// Attempt insert query execution

 
// Close connection
mysqli_close($link);
?>