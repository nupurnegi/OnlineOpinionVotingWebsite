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
	$query=mysqli_query($conn,"Update fashion SET Q5='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq6.php'); </script>";
	}
}
?>
<div class="txt">
<h2>Which is your favourite pattern to wear?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Dice">Dice</p>
<p><input type="radio" id="q1b" name="q11" value="Stripes">Stripes</p>
<p><input type="radio" id="q1c" name="q11" value="Dots">Dots</p>
<p><input type="radio" id="q1d" name="q11" value="No Pattern">No Pattern</p>
<p><input type="radio" id="q1e" name="q11" value="Other(Please Specify)">Other(Please Specify)</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>