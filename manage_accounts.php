<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div style='text-align:center; margin: 20px 0'><a href="university_list.php"><input type="button" value="Back"></a></div>
		
<?php 
	session_start();
	include "util/connection.php";
	$query = "SELECT * FROM users";
	$result = mysql_query($query);
	echo "<table class='manage_table'>";
	echo "<tr><td>ID</td><td>Name</td><td>Surname</td><td>Login</td><td>Password</td><td>Admin</td><td>Delete</td><td>Make admin</td><td>Make user</td></tr>"; 
	while($row = mysql_fetch_array($result)){
		echo "<tr><td>".$row['Id']."</td><td>".$row['Name']."</td><td>".$row['Surname']."</td><td>".$row['Login']."</td><td>".$row['Password']."</td><td>".$row['admin']."</td><td><a href='delete_acc.php?id=".$row['Id']."'>Delete</a></td><td><a href='make_admin.php?id=".$row['Id']."'>Make admin</a></td><td><a href='make_user.php?id=".$row['Id']."'>Make user</a></td></tr>"; 		
	}
	echo "</table>";
?>
</body>
</html>
