<html>
<body>
<?php
$id = $_GET['id'];
include("./util/connection.php");
$query = "SELECT * FROM phones WHERE Id=".$id."";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<form action="edit.php" method="post">
<table>
<?php
	echo "<tr>";
	echo "<td><input type='hidden' value='".$row['Id']."' name='id'/></td>";	
	echo "</tr><tr>";
	echo "<td><input type='text' value='".$row['Name']."' name='name'/></td>";
	echo "</tr><tr>";
	echo "<td><input type='text' value='".$row['Phone']."' name='phone'/></td>";
	echo "</tr><tr>";
	echo "<td><input type='text' value='".$row['Picture']."' name='picture'/></td>";
	echo "</tr>";
?>
</table>
<input type="submit" value="edit" />
</form>
</body>
</html>
