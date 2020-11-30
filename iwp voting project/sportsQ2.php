<html>
<head>
<title>sports_Q2</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>

<body align="center">

<?php
include ("connection.php");
if (isset($_POST['skill']))
{
	$skill=$_POST["skill"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update sports_indoor SET Q2='$skill' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('sportsQ3.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST">
<div class="txt">
Which major skill/s would you choose to use while playing?<br><br>
<input type="radio" name="skill" value="Mental"/>Mental 
<input type="radio" name="skill" value="Physical"/>Physical 
<input type="radio" name="skill" value="Both"/>Both 
<br><br> 
<button class="button" name="submit"> Next</button> 
</div>
</form>

</body>

</html> 