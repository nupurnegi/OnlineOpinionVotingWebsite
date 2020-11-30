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
    $sql=mysqli_query($conn,"SELECT @v := id FROM food ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update food SET Q4='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('foodquiz5.php'); </script>";
	}
}
?>
<div class="txt">
<h2> What is your absolute favorite meal?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Chinese">Chinese</p>
<p><input type="radio" id="q1b" name="q11" value="North-Indian-Thali">North-Indian-Thali</p>
<p><input type="radio" id="q1c" name="q11" value="South-Indian-Thali">South-Indian-Thali</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>