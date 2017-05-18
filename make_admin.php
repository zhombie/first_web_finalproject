<?php
	session_start();
	include "util/connection.php";
	$id = $_GET['id'];
	$make = 1;
	
	$sql = "UPDATE users SET admin='$make' WHERE Id='$id'";
	
	if(!mysql_query($sql)){
			echo mysql_error();
		}
	header("Location:manage_accounts.php");
?>