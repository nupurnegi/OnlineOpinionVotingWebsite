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
	$query=mysqli_query($conn,"Update food SET Q9='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('foodquiz10.php'); </script>";
	}
}
?>
<div class="txt">
<h2>what is your Favourite snack?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Burger">Burger</p>
<p><input type="radio" id="q1b" name="q11" value="Roll">Roll</p>
<p><input type="radio" id="q1c" name="q11" value="Samosa">Samosa</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>