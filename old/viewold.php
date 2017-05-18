<?php session_start();
	if(!$_SESSION['user'])
		header("Location:index.php");
?>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='./styles/mystyle.css'>
</head>
<body>
<div id="logout">
	<a href="logout.php">Logout</a>
</div>
<div id="info">
<?php
	echo "Welcome ".$_SESSION['user'];
?>
</div>
<table>
	<?php
	include("./util/connection.php");
	$ownerid = $_SESSION['ownerid'];
	$query = "SELECT * FROM phones WHERE Owner = $ownerid";
	$result = mysql_query($query);
	while($row=mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row['Name']."</td><td>".$row['Phone']."</td><td><img src='".$row['Picture']."'/></td><td><a href='edit_page.php?id=".$row['Id']."'> Edit </a></td><td><a href='delete.php?id=".$row['Id']."'> Delete </a></td>";
		echo "</tr>";
		}
	?>
	<tr>
	<td><a href='add_page.php'>Add</a></td><td></td>
	</tr>
</table>
<div id="info">
<?php
	
	$add = $_REQUEST['add'];
	if(isset($add))
	{
		if($add=='true') echo "Added successfull";
		else echo "Not added";
	}
?>
</div>
</body>
</html>