<?php
	$con = mysqli_connect("serwer2018644.home.pl", "32471618_zadania", "zadania123", "32471618_zadania");
	if (mysqli_connect_errno())
	{
		echo "Błąd połączenia z bazą danych" . mysqli_connect_error();
	}
		
	$id=$_REQUEST['Id'];
	$query = "DELETE FROM Pytania WHERE id=$id"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error());
	header("Location: menu.php"); 
?>