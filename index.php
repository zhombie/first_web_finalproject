<html>
<head>
	<link rel='stylesheet' type='text/css' href='style/style.css'>
	<meta charset="utf-8">
</head>
<body class="body">
<div class="loginblock">
	<form action="check.php" method="GET">
		<table class="table">
			<tr>
				<td>Никнэйм:</td>
				<td class="secondcolumn"><input type='text' name='login' placeholder="Никнэйм" class="input" /></td>
			</tr>
			<tr>
				<td>Пароль:</td>
				<td class="secondcolumn"><input type='password' name='password' placeholder="**************" class="input" /></td>
			</tr>
			<tr>
				<td></td>
				<td class="secondcolumn"><input type="submit" value="Войти" class="button" /></td>
			</tr>
		</table>
	</form>
	<hr>
	<span><a href="registration_form.php">Регистрация</a></span>
</div>
<div id="info">
<?php
	if(isset($_REQUEST['registration']))
	{
		$registration = $_REQUEST['registration'];
		if($registration=='true') echo "<center>Registration successfull</center>";
		else echo "<center>Registration failed</center>";
	}
	if(isset($_REQUEST['login'])){
		$login = $_REQUEST['login'];
		if($login=='false'){echo "<center>Incorrect</center>";}	
	}
?>
</div>