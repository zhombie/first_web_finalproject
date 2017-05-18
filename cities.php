<?php
	include "util/header.php";
	include "util/navigationbar.php";
	
	include "util/connection.php";

	$query2 = "SELECT * FROM cities";
	$result2 = mysql_query($query2);
	$rowcount = mysql_num_rows($result2);

	if(isset($_GET['id'])){
		$id = $_GET['id'];		
	}

	$query1 = "SELECT id, Cities, Logo, Herb FROM cities WHERE id = '$id'";
	$result1 = mysql_query($query1);
	$row1 = mysql_fetch_array($result1);

	$query = "SELECT id, Name, Image, Shortname FROM universities WHERE CityID = '$id'";
	$result = mysql_query($query);
	
	echo "<div class='news'>";
		echo "<div class='univers'>";
			echo "<div class='almaty'>";
			if($id==0 || $id==$rowcount+1){
				header("Location:university_list.php");
			}
			echo "<span class='back'><a href='cities.php?id=".($id-1)."'>←</a></span>";
			echo "<span class='forward'><a href='cities.php?id=".($id+1)."'>→</a></span>";
			echo "<img src='".$row1['Logo']."' class='logo'><h1 class='name'>".$row1['Cities']."</h1>";
			echo "<table class='table'><tr>";
					
	while($row = mysql_fetch_array($result)){
		echo "<td class='rows'><a href='profile.php?id=".$row['id']."'>";
		echo "<img src='".$row['Image']."' class='img' title='".$row['Name']."' /></a><p>".$row['Name']."</p>";
		echo "</td>";				      								
	}
	echo "</tr></table>";
	echo "</div></div></div>";

	include 'util/footer.php';
?>