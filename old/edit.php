<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$picture = $_REQUEST['picture'];

include("./util/connection.php");

$query = "UPDATE phones SET Name = '".$name."', Phone='".$phone."', Picture='".$picture."' WHERE Id = '".$id."'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
header("Location:view.php");
?>
