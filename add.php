<?php
	include("auth.php");
	require 'config.php';
?>
<?php
	$status = "";
	if(isset($_POST['new']) && $_POST['new']==1)
	{
		$Question_name = $_REQUEST['Question_name'];
		$Option1 = $_REQUEST['Option1'];
		$Option2 = $_REQUEST['Option2'];
		$Option3 = $_REQUEST['Option3'];
		$Option4 = $_REQUEST['Option4'];
		$Correct = $_REQUEST['Correct'];
		$insquery="insert into questions (`Question_name`,`Option1`,`Option2`,`Option3`,`Option4`,`Correct`) values ('$Question_name','$Option1','$Option2','$Option3','$Option4','$Correct')";
		mysqli_query($con,$insquery) or die(mysql_error());
		$status = "Twoje pytanie zostało dodane do bazy danych.";
	}
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
		<p class="text-left">ffefe</p>
		<p>Testy z fizyki ☺</p>
		<br/>
		<h6>
			<a style="text-decoration:none; color:yellow;" href="menu.php">MENU</a> 
			>>>
			<a style="text-decoration:none; color:yellow;" href="add.php">DODAJ PYTANIE</a>
		</h6>
	</div>
	<div class="container">
		<div>
			<p style="color:#008000;"><?php echo $status; ?></p>
		</div>
		<div>
			<form name="form" method="post" action=""> 
				<label>Pytanie:</label>
				<input type="hidden" name="new" value="1" />
				<input type="text" name="Question_name" class="form-control" placeholder="Podaj" required>
				<br/>
				<label>Opcja:</label>
				<input type="text" name="Option1" class="form-control" placeholder="Podaj" required>
				<br/>
				<label>Opcja:</label>
				<input type="text" name="Option2" class="form-control" placeholder="Podaj" required>
				<br/>
				<label>Opcja:</label>
				<input type="text" name="Option3" class="form-control" placeholder="Podaj" required>
				<br/>
				<label>Opcja:</label>
				<input type="text" name="Option4" class="form-control" placeholder="Podaj" required>
				<br/>
				<label>Odpowiedź:</label>
				<input type="text" name="Correct" class="form-control" placeholder="Podaj" required>
				<br/>
				<button type="submit" class="btn btn-primary">Wyślij</button>
			</form>
		</div>
	</div>
<?php
	include("footer.php");
?>