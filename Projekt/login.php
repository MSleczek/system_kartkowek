<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "test";
	
	$con = mysqli_connect("$hostname","$username","$password","$database");
	if (mysqli_connect_errno())
	{
		echo "Błąd połączenia z bazą danych" . mysqli_connect_error();
    }
	
	session_start();
    if (isset($_POST['username'])){
		$username = stripslashes($_REQUEST['username']);
		$password = stripslashes($_REQUEST['password']);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1)
		{
			$_SESSION['username'] = $username;
			header("Location: menu.php"); 
        }
		else
		{
			header('Location: login.php');
		}
    }
	else{
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Panel logowania - Testy z fizyki</title>
	<?php
	include("head.php");	
	?>
</head>
<body>
	<div class="bg text-center">
		<p>Testy z fizyki ☺</p>
	</div>
	<div class="container">
		<h2>Panel logowania dla administratora</h2>
		<form action="" method="post" name="login">
			<div class="form-group">
				<label>Nazwa użytkownika:</label>
				<input type="text" name="username" class="form-control" placeholder="Podaj login" required />
			</div>
			<div class="form-group">
				<label>Hasło:</label>
				<input type="password" name="password" class="form-control" placeholder="Podaj hasło" required />
			</div>
			<button type="submit" name="submit" value="Login" class="btn btn-primary">Zaloguj się</button>
		</form>
	</div>

	<?php
	include("footer.php");
	?>

<?php } ?>

