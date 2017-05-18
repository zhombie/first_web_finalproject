<?php
	session_start();
	include "util/connection.php";
	$name = $_POST['Name'];
	$image = $_POST['Image'];
	$shortname = $_POST['Shortname'];
	$cityID = $_POST['CityID'];
	$id = $_POST['id'];
	$sql = "UPDATE universities SET Name = '$name', Image = '$image', Shortname = '$shortname', CityID = '$cityID' WHERE id='$id'";
	if(!mysql_query($sql)){
			echo mysql_error();
		}
	header("Location:manage_page.php");
?>