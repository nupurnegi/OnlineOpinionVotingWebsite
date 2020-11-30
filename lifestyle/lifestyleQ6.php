<html>
<head>
<title>lifestyleQ6</title>
<link rel="stylesheet" type="text/css" href="lifestylequiz.css" />
</head>
<body align="center">

<?php
include ("connection.php");

if (isset($_POST['say']))
{
	$say=$_POST["say"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM lifestyle ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update lifestyle SET Q6='$say' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('last.html'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
How frequently do you access the Internet?<br><br>
<input type="radio" name="say" value="a"/>Not as often as I would like<br><br>
<input type="radio" name="say" value="b"/>I go online whenever I need to send<br>or check my email<br><br>
<input type="radio" name="say" value="c"/>I am connected whenever I'm looking<br>for specific information<br><br>
<input type="radio" name="say" value="d"/>If I'm awake, I'm online<br><br>
<input type="radio" name="say" value="e"/>More than I should<br><br>
<input type="radio" name="say" value="f"/>Not as much as I used to
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 