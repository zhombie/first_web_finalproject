<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div style='text-align:center; margin: 20px 0'><a href="university_list.php"><input type="button" value="Back"></a></div>
		
<?php 
	session_start();
	include "util/connection.php";
	$query = "SELECT * FROM universities";
	$result = mysql_query($query);
	echo "<table class='manage_table'>";
	echo "<tr><td>ID</td><td>Name</td><td>Image</td><td>Shortname</td><td>CityID</td><td>Delete</td><td>Update</td></tr>"; 
	while($row = mysql_fetch_array($result)){
		echo "<tr><td>".$row['id']."</td><td>".$row['Name']."</td><td><img src='".$row['Image']."' style='height:70px;width:100px;'></td><td>".$row['Shortname']."</td><td>".$row['CityID']."</td><td><a href='update_university.php?id=".$row['id']."'>Update</a></td><td><a href='delete_university.php?id=".$row['id']."'>Delete</a></td></tr>";  		
	}
	echo "</table>";
?>
</body>
</html>
