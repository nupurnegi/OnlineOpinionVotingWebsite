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
    $sql=mysqli_query($conn,"SELECT @v := id FROM fashion ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update fashion SET Q3='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq4.php'); </script>";
	}
}
?>
<body>
<div class="txt">
<h2>What would be the period of the year you spend the most on clothing and accessories?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Spring">Spring</p>
<p><input type="radio" id="q1b" name="q11" value="Summer">Summer</p>
<p><input type="radio" id="q1c" name="q11" value="Autumn">Autumn</p>
<p><input type="radio" id="q1d" name="q11" value="Winter">Winter</p>
<p><input type="radio" id="q1e" name="q11" value="No difference between these periods">No difference between these periods</p>
<input type="submit" value="vote" onclick="myfunction()">
<input type="Reset">
</form>
</div>
</body>
</html>