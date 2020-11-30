<html>
<head>
<title>lifestyleQ3</title>
<link rel="stylesheet" type="text/css" href="lifestylequiz.css" />
</head>
<body align="center">

<?php
include ("connection.php");

if (isset($_POST['eat']))
{
	$eat=$_POST["eat"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM lifestyle ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update lifestyle SET Q3='$eat' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('lifestyleQ4.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
How many times have you eaten out in a restaurant in the past month?<br><br>
<input type="radio" name="eat" value="Once"/>Once <br>
<input type="radio" name="eat" value="Twice"/>Twice<br>
<input type="radio" name="eat" value=">3"/>More than 3 times<br>
<input type="radio" name="eat" value="Never"/>Never
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 