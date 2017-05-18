<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>	
<body class="body">
	<div class="loginblock">
		<?php $id = $_GET['id']; ?>
		<form method = "POST" action = "update.php">
			<p id="title">Update university:</p>
			<p>Name:<input type="text" name="Name" placeholder="Name" class="input"></p>
			<p>Image:<input type="text" name="Image" placeholder="image/..." class="input"></p>
			<p>Shortname:<input type="text" name="Shortname" placeholder="Shortname" class="input"></p>
			<p>CityID:<input type="text" name="CityID" placeholder="CityID" class="input"></p>
			
			<p><input type="hidden" value="<?php echo $id; ?>" name="id"></p>
	 		<p><input type="submit" value="Submit" id="button"></p>
	 		<a href="manage_page.php"><p><input type="button" value="Cancel" id="cancel"></p></a>
		</form>
	</div>
<div style="position:absolute; top: 10%; left: 5%; border: 1px solid black">
	<table>
		<tr>
			<td>Aktau</td><td>1</td>
		</tr>
		<tr>
			<td>Aktobe</td><td>2</td>
		</tr>
		<tr>
			<td>Almaty</td><td>3</td>
		</tr>
		<tr>
			<td>Astana</td><td>4</td>
		</tr>
		<tr>
			<td>Atyrau</td><td>5</td>
		</tr>
		<tr>
			<td>Zhezkazgan</td><td>6</td>
		</tr>
		<tr>
			<td>Karagandy</td><td>7</td>
		</tr>
		<tr>
			<td>Kyzylorda</td><td>8</td>
		</tr>
		<tr>
			<td>Kokshetau</td><td>9</td>
		</tr>
		<tr>
			<td>Kostanay</td><td>10</td>
		</tr>
		<tr>
			<td>Pavlodar</td><td>11</td>
		</tr>
		<tr>
			<td>Petropavl</td><td>12</td>
		</tr>
		<tr>
			<td>Semey</td><td>13</td>
		</tr>
		<tr>
			<td>Taldykorgan</td><td>14</td>
		</tr>
		<tr>
			<td>Taraz</td><td>15</td>
		</tr>
		<tr>
			<td>Oral</td><td>16</td>
		</tr>
		<tr>
			<td>Oskemen</td><td>17</td>
		</tr>
		<tr>
			<td>Shymkent</td><td>18</td>
		</tr>

	</table>
</div>
</body>
</html>