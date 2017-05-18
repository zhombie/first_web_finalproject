<?php
session_start();
$name = $_POST['name'];
$phone = $_POST['phone'];
$ownerid = $_SESSION['ownerid'];

//creating path to an image folder
$photo_path = "./images/";
$photo_path = $photo_path . basename($_FILES['file']['name']);

include("./util/connection.php");

//try to upload photo
if(move_uploaded_file($_FILES['file']['tmp_name'], $photo_path)) {

	//connect to database
	include("connection.php");

	//creating SQL query 
	$query = "INSERT INTO phones(Name, Phone, Picture, Owner) VALUES('$name','$phone','$photo_path', '$ownerid')";

	//executing query
	mysql_query($query);

	//closing connection
	mysql_close($con);

	//redirecting to previous page
	header("Location: view.php?add=true");
} 
else{
	mysql_close($con);
	//if file didn't upload then return and show error message
    header("Location: view.php?add=false");
}
?>
