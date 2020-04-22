<?php
	include("auth.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Menu - Testy z fizyki</title>
	<?php
	include("head.php");	
	?>
</head>
<body>
	<div class="bg text-center">
		<p>Testy z fizyki ☺</p>
		<br/>
		<h6><a style="text-decoration:none; color:white;" href="menu.php">menu</a></h3>
	</div>
	<div class="container">
	<h2>Menu:</h2>
	<a href="add.php">Dodaj pytanie</a>
	<br/>
	<button onclick="window.location.href='/exam/logout.php'" class="btn btn-primary">Wyloguj się</button>
	</div>
<?php
	include("footer.php");
?>
