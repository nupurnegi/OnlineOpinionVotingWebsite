<html>
<head>
<title>sports_Q1</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body align="center">

<?php
include ("connection.php");
if (isset($_POST['door']))
{
	$door=$_POST["door"];
    $query=mysqli_query($conn,"INSERT INTO sports_indoor (Q1) VALUES ('$door')");
	if ($query)
	{
		echo "<script> window.location.replace('sportsQ2.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
Where do you prefer to play?<br><br>
<input type="radio" name="door" value="Indoor"/>Indoor 
<input type="radio" name="door" value="Outdoor"/>Outdoor
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 