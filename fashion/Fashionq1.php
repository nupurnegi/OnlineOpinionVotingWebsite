<html>
<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="fashioncss.css" />
</head>
<?php
include ("connection.php");
if (isset($_POST['q11']))
{
	$q11=$_POST["q11"];
    $query=mysqli_query($conn,"INSERT INTO fashion (Q1) VALUES ('$q11')");
	if ($query)
	{ 
		echo "<script> window.location.replace('Fashionq2.php'); </script>";
	}
}
?>
<body>
<div class="txt">
<h2> How often do you buy new clothes?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="several times per week">Several times per week</p>
<p><input type="radio" id="q1b" name="q11" value="several times per month">Several times per month</p>
<p><input type="radio" id="q1c" name="q11" value="several times per year">Several times per year</p>
<p><input type="radio" id="q1d" name="q11" value="less often">Less Often</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>