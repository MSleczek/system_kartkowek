<?php	
	require 'config.php';
	$result = mysqli_query($con, "select * from questions");
	
	echo "<center>";
	echo "<h2>Testy z fizyki</h2>";
	echo "<hr/>";
	
	if(mysqli_num_rows($result)>0)
	{
		echo"<table>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<form name='form' method='post' action=''>";
			echo "<input type='hidden' name='new' value='1' />";
			echo "<tr>";
			echo "<td>".$row['id'].")".$row['Question_name']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><input type='radio' id='Option1' name=".$row['id']." class='radoptions' value=".$row['Option1']." required/>".$row['Option1']."";
			echo "<td><input type='radio' id='Option2' name=".$row['id']." class='radoptions' value=".$row['Option2']." required/>".$row['Option2']."";
			echo "<td><input type='radio' id='Option3' name=".$row['id']." class='radoptions' value=".$row['Option3']." required/>".$row['Option3']."";
			echo "<td><input type='radio' id='Option4' name=".$row['id']." class='radoptions' value=".$row['Option4']." required/>".$row['Option4']."";
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><span id='span1' class='radoptions' style='color:green; display:none;'><hr/><b>Poprawna odpowiedź to: ".$row['Correct']."</b><hr/></span></td>";
			echo "</tr>";
			echo "</form>";
		}
		echo "</table>";
	}
	mysqli_close($con);
?>

<button id="but1" type="button">Submit</button>




