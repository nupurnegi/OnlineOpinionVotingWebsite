<html>
<head>
<title>lifestyleQ5</title>
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
	$query=mysqli_query($conn,"Update lifestyle SET Q5='$say' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('lifestyleQ6.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
What would you say about your clothings?<br><br>
<input type="radio" name="say" value="a"/>My apparel selections are strongly influenced<br>by clothing worn by people i admire<br><br>
<input type="radio" name="say" value="b"/>I prefer to buy designer labels rather<br>than store-branded merchandise<br><br>
<input type="radio" name="say" value="c"/>I prefer the tailored look in my clothing
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 