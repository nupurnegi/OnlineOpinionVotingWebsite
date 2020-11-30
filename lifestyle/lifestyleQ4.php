<html>
<head>
<title>lifestyleQ4</title>
<link rel="stylesheet" type="text/css" href="lifestylequiz.css" />
</head>
<body align="center">

<?php
include ("connection.php");

if (isset($_POST['door']))
{
	$door=$_POST["door"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM lifestyle ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update lifestyle SET Q4='$door' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('lifestyleQ5.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
I'd spend my money on clothes before I'd spend it on most other things.<br><br>
<input type="radio" name="door" value="Strongly agree"/>Strongly agree <br>
<input type="radio" name="door" value="Agree"/>Agree<br>
<input type="radio" name="door" value="Neutral"/>Neutral<br>
<input type="radio" name="door" value="Disagree"/>Disagree<br>
<input type="radio" name="door" value="Strongly disagree"/>Strongly disagree<br>
<input type="radio" name="door" value="Not sure"/>Not sure
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 