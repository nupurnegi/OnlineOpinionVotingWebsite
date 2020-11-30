<html>
<head>
<title>sports_Q5</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body align="center">
<?php
include ("connection.php");

if (isset($_POST['txt']))
{
	$txt=$_POST["txt"];
	$sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
    $query=mysqli_query($conn,"Update sports_indoor SET Q5='$txt' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('sportsQ6.php'); </script>";
	}
}
$conn->close();
?>

<br><br>
<form action="" method="POST">
<div class ="txt">
Which company do you think makes the best sports equipments?<br><br>
<input type="text" name="txt"/>
<br><br>
<button class="button" name="submit"> Next</button> 
</div>
</form>
</body>
</html>