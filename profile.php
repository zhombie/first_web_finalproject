<?php
	include "util/header.php";
	include "util/navigationbar.php";
	
	include "util/connection.php";

	$query = "SELECT * FROM universities";
	$result = mysql_query($query);
	$rowcount = mysql_num_rows($result);

	if(isset($_GET['id'])){
		$id = $_GET['id'];		
	}

	$query1 = "SELECT * FROM universities WHERE id = '$id'";
	$result1 = mysql_query($query1);
	$row1 = mysql_fetch_array($result1);

	$query2 = "SELECT * FROM univerinfo WHERE univerID = '$id'";
	$result2 = mysql_query($query2);

	if (mysql_num_rows($result2)>0) {
		echo "<div class='profilePage'><fieldset>";		
		while($row2 = mysql_fetch_array($result2)){
			echo "<legend><span class='univerName'>".$row2['univerName']."</span></legend>";
			echo "<div style='border-bottom: 1px groove; padding-bottom: 15px'><div class='univerImg'><img src='".$row2['univerLogo']."'></div>";
			echo "<table class='information'>";
			echo "<tr class='infoName'><td><span>Name of university: </span></td><td>".$row2['univerName']."</td></tr><br>";
			echo "<tr class='infoYear'><td><span>Founded: </span></td><td>".$row2['univerYear']."</td></tr>";
			echo "<tr class='infoSite'><td><span>Official site: </span></td><td><a href='http://www.".$row2['univerSite']."' target='_blank'>".$row2['univerSite']."</a></td></tr>";
			echo "<tr class='infoLocation'><td><span>Address: </span></td><td>".$row2['univerLocation']."</td></tr>";
			echo "<tr class='infoNumber'><td><span>TEL: </span></td><td>".$row2['univerNumber']."</td></tr>";
			
			echo "</table>";
		
			echo "<div style='clear: both'></div></div>";
			echo "<div><img src='".$row2['univerMap']."' style='height: 230px; width: 300px; float: left; margin: 50px 30px 15px 30px'></div>";
			echo "<p><div class='univerHistory'>".$row2['univerHistory']."</div></p>";
		}
		echo "<div class='edit'><a href='edit_article.php'><img src='image/edit.png' class='editimg' /></a></div";
			
	}else {
		echo "<div style='height: 700px;text-align:center;font-size: 50px;margin-top:150px'>No results found</div>";
	}
	echo "</fieldset></div>";
	include 'util/footer.php';
?>