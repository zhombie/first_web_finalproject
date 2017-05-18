<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$login = $_REQUEST['login'];
$password = md5($_REQUEST['password']);

include("util/connection.php");

$query = "INSERT INTO users(Name,Surname,Login, Password) VALUES('$name','$surname','$login','$password')";

$result = mysql_query($query);
if(!$result) header("Location:index.php?registration=false");
else header("Location:index.php?registration=true");

?>
