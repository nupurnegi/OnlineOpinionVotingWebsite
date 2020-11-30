<html>
<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="fashioncss.css" />
</head>
<body>
<?php
include ("connection.php");
if (isset($_POST['q11']))
{
	$q11=$_POST["q11"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM fashion ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update fashion SET Q7='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq8.php'); </script>";
	}
}
?>
<h2>How often do you buy shoes?</h2>
<form action="" method="post">
<div class="txt">
<p><input type="radio" id="q1a" name="q11" value="Several times per month">Several times per month</p>
<p><input type="radio" id="q1b" name="q11" value="Once per month">Once per month</p>
<p><input type="radio" id="q1c" name="q11" value="Once every 6 months">Once every 6 months</p>
<p><input type="radio" id="q1d" name="q11" value="Once per year">Once per year</p>
<input type="submit" value="vote">
<input type="Reset">
</form>
</div>
</body>
</html>