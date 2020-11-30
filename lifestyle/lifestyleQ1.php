<html>
<head>
<title>lifestyleQ1</title>
<link rel="stylesheet" type="text/css" href="lifestylequiz.css" />
</head>
<body align="center">

<?php
include ("connection.php");
if (isset($_POST['door']))
{
	$door=$_POST["door"];
    $query=mysqli_query($conn,"INSERT INTO lifestyle (Q1) VALUES ('$door')");
	if ($query)
	{
		echo "<script> window.location.replace('lifestyleQ2.php'); </script>";
	}
}
?>

<br><br>
<form action="" method="POST" required >
<div class="txt">
Into which group does your age fall?<br><br>
<input type="radio" name="door" value="18-24"/>18-24<br> 
<input type="radio" name="door" value="25-34"/>25-34<br>
<input type="radio" name="door" value="35-49"/>35-49<br>
<input type="radio" name="door" value="50-64"/>50-64<br>
<input type="radio" name="door" value="65 or older"/>65 or older
<br><br>
<button class="button"> Next</button>
</div>
</form>
</body>
</html> 