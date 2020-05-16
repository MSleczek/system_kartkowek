<?php  
	$con = mysqli_connect("serwer2018644.home.pl", "32471618_zadania", "zadania123", "32471618_zadania");
	$ok = "Pytanie został dodane pomyślnie.";
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

	if(isset($_POST['submit']))  
	{  
		$Id = $_REQUEST['Id'];
		$Pytanie = $_REQUEST['Pytanie'];
		$Opcja1 = $_REQUEST['Opcja1'];
		$Opcja2 = $_REQUEST['Opcja2'];
		$Opcja3 = $_REQUEST['Opcja3'];
		$Opcja4 = $_REQUEST['Opcja4'];
		$Odpowiedz = $_REQUEST['Odpowiedz'];
		$IdKategoria = $_POST['IdKategoria'];
		$query=mysqli_query($con,"update Pytania set Pytanie='".$Pytanie."',Opcja1='".$Opcja1."',
Opcja2='".$Opcja2."',Opcja3='".$Opcja3."',Opcja4='".$Opcja4."',
Odpowiedz='".$Odpowiedz."',IdKategoria='".$IdKategoria."' where id='".$Id."'");  
		if($query==1)  
		{  
			echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>$ok</div>";		
		}   
		else 
		{
			echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>$bad</div>";	
		}
	}

?> 

<?php
	#$filmy = mysqli_query($con, "select * from Pytania where id='".$_POST["Id"]."'");
	$pytania = mysqli_query($con, "select * from Pytania where id=1");
	$kategoria = mysqli_query($con, "select * from Kategoria");
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
			<h3> Formularz dodawania pytań </h3>
			<hr/>
			<form action="" method="post" enctype="multipart/form-data"> 
			<?php if (mysqli_num_rows($pytania) > 0) { 
				while($row = mysqli_fetch_assoc($pytania)) { 
			?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pytanie: </label>
				<div class="col-sm-10">
					<input type="hidden" class="form-control" name="Id" value="<?php echo $row["Id"] ?>" required>
					<input type="text" class="form-control" name="Pytanie" value="<?php echo $row["Pytanie"] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Opcja 1: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Opcja1"  value="<?php echo $row["Opcja1"] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Opcja 2: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Opcja2" value="<?php echo $row["Opcja2"] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Opcja 3: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Opcja3" value="<?php echo $row["Opcja3"] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Opcja 4: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Opcja4" value="<?php echo $row["Opcja4"] ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Odpowiedź: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Odpowiedz" value="<?php echo $row["Odpowiedz"] ?>" required>
				</div>
			</div>		
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategoria: </label>
				<div class="col-sm-10">
					<select class="form-control" name="IdKategoria">
					<?php if (mysqli_num_rows($kategoria) > 0) { 
						while($row = mysqli_fetch_assoc($kategoria)) { 
					?>
						<option value="<?php echo $row["IdKategoria"] ?>"><?php echo $row["Nazwa"] ?></option>
					<?php }} ?>
					</select>
				</div>
			</div>		
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-secondary" id="submit" value="submit" name="submit">Wyślij</button>
				</div>
			</div>
			<?php }} ?>
			</form>
		</div>
		<br/>
	<?php include("footer.php"); ?>