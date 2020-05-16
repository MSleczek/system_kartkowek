<?php  
	$con = mysqli_connect("serwer2018644.home.pl", "32471618_zadania", "zadania123", "32471618_zadania");
	$ok = "Formularz został dodany prawidłowo.";
	$bad ="Coś poszło nie tak. Spróbuj ponownie później.";
	
	if (!mysqli_set_charset($con, "utf8")) 
	{
		mysqli_error($con);
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
	
	$pytania = mysqli_query($con, "select * from Pytania");

?>  

<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Formularz dodawania pytań - Testy z fizyki</title>
		<?php include("head.php") ?>
		<div class="bg text-center">
			<p>Formularz dodawania pytań</p>
		</div>
		<div id="status"></div>
		<div class="container">
		<table class="table table-bordered text-center">
			<thead class="table-secondary">
				<tr>
					<th>L.p.</th>
					<th>Pytanie</th>
					<th>Edytuj</th>
					<th>Usuń</th>
				</tr>
			</thead>
		<tbody>
			<?php
			while($row = mysqli_fetch_assoc($pytania)) { ?>
				<tr>
					<td align="center"><?php echo $row["Id"]; ?></td>
					<td align="center"><?php echo $row["Pytanie"]; ?></td>
					<td align="center">
						<a href="edit_question.php?id=<?php echo $row["Id"]; ?>">Edytuj</a>
					</td>
					<td align="center">
						<a href="del_question.php?id=<?php echo $row["Id"]; ?>">Usuń</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
		</table>	
		</div>		
	<?php include("footer.php"); ?>