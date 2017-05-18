<?php
session_start();
$name = $_POST['Name'];
$shortname = $_POST['Shortname'];
$cityID = $_POST['CityID'];

//creating path to an image folder
$photo_path = "image/";
$photo_path = $photo_path . basename($_FILES['file']['name']);

include("util/connection.php");

//try to upload photo
if(move_uploaded_file($_FILES['file']['tmp_name'], $photo_path)) {

	//connect to database
	include("util/connection.php");

	//creating SQL query 
	$query = "INSERT INTO universities(Name, Image, Shortname, CityID) VALUES('$name', '$photo_path','$shortname','$cityID')";

	//executing query
	mysql_query($query);

	//closing connection
	mysql_close($con);

	//redirecting to previous page
	header("Location: university_list.php?add=true");
}
else{
	mysql_close($con);
	//if file didn't upload then return and show error message
    header("Location: university_list.php?add=false");
}
?>
