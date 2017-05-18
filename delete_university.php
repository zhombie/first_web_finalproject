<?php 
	include "util/connection.php";
	$id = $_GET['id'];
	$query = "DELETE FROM universities WHERE id='$id'";
	mysql_query($query);
	header("Location:manage_page.php");
 ?>