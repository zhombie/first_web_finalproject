<?php
session_start();

$login = $_REQUEST['login'];
$password = md5($_REQUEST['password']);

include("./util/connection.php");

$query = "SELECT * FROM users WHERE Login='$login' AND Password='$password'";
$result = mysql_query($query);
$num = mysql_num_rows($result);

if($num == 0){
	header("Location:index.php?login=false");
}
else{

	$row = mysql_fetch_array($result);
	$_SESSION['user'] = $row['Login'];
	$_SESSION['ownerid'] = $row['Id'];
	
	$_SESSION['admin']=$row['admin'];
	header("Location:view.php");
} 
?>
