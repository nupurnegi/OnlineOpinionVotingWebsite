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
	$query=mysqli_query($conn,"Update fashion SET Q6='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('Fashionq7.php'); </script>";
	}
}
?>
<div class="txt">
<h2>What is your favorite textile fiber for clothing?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Vicuna">Vicuna</p>
<p><input type="radio" id="q1b" name="q11" value="Linen">Linen</p>
<p><input type="radio" id="q1c" name="q11" value="Camel Hair">Camel Hair</p>
<p><input type="radio" id="q1d" name="q11" value="Nylon">Nylon</p>
<p><input type="radio" id="q1e" name="q11" value="Cotton">Cotton</p>
<p><input type="radio" id="q1f" name="q11" value="Silk">Silk</p>
<p><input type="radio" id="q1g" name="q11" value="Cashmere">Cashmere</p>
<p><input type="radio" id="q1h" name="q11" value="Spandex">Spandex</p>
<p><input type="radio" id="q1i" name="q11" value="Wool">Wool</p>
<p><input type="radio" id="q1j" name="q11" value="Rayon">Rayon</p>
<p><input type="radio" id="q1k" name="q11" value="Acrylic">Acrylic</p>
<p><input type="radio" id="q1l" name="q11" value="Mohair">Mohair</p>
<p><input type="radio" id="q1m" name="q11" value="Lycra">Lycra</p>
<p><input type="radio" id="q1n" name="q11" value="Polyester">Polyester</p>
<p><input type="radio" id="q1o" name="q11" value="Hemp">Hemp</p>
<p><input type="radio" id="q1p" name="q11" value="Viscose">Viscose</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>