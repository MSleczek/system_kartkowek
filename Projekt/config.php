<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test";
	
$con = mysqli_connect("$hostname","$username","$password","$database");

if (!mysqli_set_charset($con, "utf8")) 
{
	~mysqli_error($con);
	exit();
} 
else 
{
	mysqli_character_set_name($con);
}
if (mysqli_connect_errno())
{
	echo "Błąd połączenia z bazą danych" . mysqli_connect_error();
}
?>