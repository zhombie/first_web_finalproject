<?php
$id = $_REQUEST['id'];

include("./util/connection.php");

$query = "DELETE FROM phones WHERE Id = '".$id."'";
$result = mysql_query($query);
header("Location:view.php");
?>
