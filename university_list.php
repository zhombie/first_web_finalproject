<?php
	include "util/header.php";
	include "util/navigationbar.php";
	
	include "util/connection.php";

	$query = "SELECT id, Cities, Logo, Herb FROM cities";
	$result = mysql_query($query);

	if ($_SESSION['admin']==1){
		echo "<div style='text-align:center; margin: 20px 20px 0 20px;'><a href='add_university.php'><input type='button' value='Add university' /></a></div>";
		echo "<div style='text-align:center; margin: 20px 20px 0 20px;'><a href='manage_page.php'><input type='button' value='Manage' /></a></div>";
		echo "<div style='text-align:center; margin: 20px 20px -25px 20px;'><a href='manage_accounts.php'><input type='button' value='Manage accounts' /></a></div>";
	}
	
	echo "<div class='univers'>";
	echo "<div class='news'>";

	if (mysql_num_rows($result)>0) {
    	/*echo "<table class='table_cities'>";
    	while($row = mysql_fetch_array($result)) {
        	echo "<tr><td class='rows_cities'>";
        	echo "<a href='cities.php?id=".$row['id']."'>".$row['Cities']."</a>";
    		echo "</td></tr>";
    	}
    	echo "</table>";*/
    	while($row = mysql_fetch_array($result)) {
        	echo "<div class='listy'>";
        	echo "<div class='univerlist'><a href='cities.php?id=".$row['id']."'>".$row['Cities']."</a></div>";
 	        echo "</div>";
        }
        
	} else {
    	echo "No results found";
	}
	echo "</div></div>";
	//<td class='rows_cities'><img src='".$row['Herb']."' class='herb' ></td>		
	include 'util/footer.php';
?>