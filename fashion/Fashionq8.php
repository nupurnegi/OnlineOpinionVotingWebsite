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
	$query=mysqli_query($conn,"Update fashion SET Q8='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq9.php'); </script>";
	}
}
?>
<div class="txt">
<h2>How much do you spend on clothing per year in Dollars?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="0-50">0-50</p>
<p><input type="radio" id="q1b" name="q11" value="50-100">50-100</p>
<p><input type="radio" id="q1c" name="q11" value="100-250">100-250</p>
<p><input type="radio" id="q1d" name="q11" value="250-500">250-500</p>
<p><input type="radio" id="q1e" name="q11" value="500+">500+</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>