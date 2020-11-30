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
	$query=mysqli_query($conn,"Update fashion SET Q2='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq3.php'); </script>";
	}
}
?>
<div class="txt">
<h2> Why do you most often buy new clothes?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="As gift">As gift</p>
<p><input type="radio" id="q1b" name="q11" value="Replacing Worn-out clothes">Replacing Worn-out clothes</p>
<p><input type="radio" id="q1c" name="q11" value="To enrich my wardrobe">To enrich my wardrobe</p>
<p><input type="radio" id="q1d" name="q11" value="Its one of my daily routines">Its one of my daily routines</p>
<p><input type="radio" id="q1e" name="q11" value="Other reason/s(Please Specify)">Other reason/s(Please Specify)</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>