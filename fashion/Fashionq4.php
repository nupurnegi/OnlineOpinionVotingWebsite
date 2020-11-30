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
	$query=mysqli_query($conn,"Update fashion SET Q4='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq5.php'); </script>";
	}
}
?>
<body>
<div class="txt">
<h2>What is your usual clothing size?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="XS">XS(ExtraSmall)</p>
<p><input type="radio" id="q1b" name="q11" value="S">S(Small)</p>
<p><input type="radio" id="q1c" name="q11" value="M">M(Medium)</p>
<p><input type="radio" id="q1d" name="q11" value="L">L(Large)</p>
<p><input type="radio" id="q1e" name="q11" value="XL">XL(Extra Large)</p>
<p><input type="radio" id="q1f" name="q11" value="XXL">XXL(Extra extra large)</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>