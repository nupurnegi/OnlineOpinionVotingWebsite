<html>
<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="foodcss.css" />
</head>
<body align="center">
<?php
include ("connection.php");
if (isset($_POST['q11']))
{
	$q11=$_POST["q11"];
    $query=mysqli_query($conn,"INSERT INTO food (Q1) VALUES ('$q11')");
	if ($query)
	{ 
		echo "<script> window.location.replace('foodquiz2.php'); </script>";
	}
}
?>
<div class="txt">
<h2> What is your favorite meal of the day?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Breakfast">Breakfast</p>
<p><input type="radio" id="q1b" name="q11" value="Lunch">Lunch</p>
<p><input type="radio" id="q1c" name="q11" value="Dinner">Dinner</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>