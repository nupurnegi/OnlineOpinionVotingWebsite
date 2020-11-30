<html>
<head>
<title>sports_Q3</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body align="center">
<?php
include ("connection.php");

if (isset($_POST['board']))
{
	$board=$_POST["board"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update sports_indoor SET Q3='$board' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('sportsQ4.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST">
<div class="txt">
Do you like board games <br>(like monopoly, chess, ludoo etc)?<br>
<input type="radio" value="Yes" name="board"/>Yes 
<input type="radio" value="No" name="board"/> No
<br><br>

<button class="button" name="submit"> Next</button>
</div>

</form>

</body>

</html> 