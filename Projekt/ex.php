<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['Id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
$status = "";
if(isset($_POST['submit']))
{
$Pytania=$_REQUEST['Pytania'];
$Opcja1 =$_REQUEST['Opcja1'];
$Opcja2 =$_REQUEST['Opcja2'];
$Opcja3 =$_REQUEST['Opcja3'];
$Opcja4 =$_REQUEST['Opcja4'];
$Odpowiedz =$_REQUEST['Odpowiedz'];


$update="update Pytania set Pytanie='".$Pytanie."',Opcja1='".$Opcja1."',
Opcja2='".$Opcja2."',Opcja3='".$Opcja3."',Opcja4='".$Opcja4."',
Odpowiedz='".$Odpowiedz."',IdKategoria='".$IdKategoria."' where id='".$Id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>