<html>
<head>
<title>lifestyleQ2</title>
<link rel="stylesheet" type="text/css" href="lifestylequiz.css" />
</head>
<body align="center">
<?php
$x=1;
include ("connection.php");

if (isset($_POST['submit']))
{
	$checkbox1=$_POST["act"];
    $act="";
		$sql=mysqli_query($conn,"SELECT @v := id FROM lifestyle ORDER BY id DESC LIMIT 1;");
	    $row=mysqli_fetch_row($sql);
	    $v=$row[0];
		foreach($checkbox1 as $act1)
		{
			$act .= $act1.",";
		}
		
        $query=mysqli_query($conn,"UPDATE lifestyle SET Q2=CONCAT(Q2, '$act') WHERE id='$v'");
	    if ($query)
	    {
		    echo "<script> window.location.replace('lifestyleQ3.php'); </script>";
	    }
}
?>

<br><br>
<form action="" method="POST">
<div class="txt">
Which of the following leisure activities<br> do you do at least once a month?<br>
<input type="checkbox" name="act[]" value="Movie"/>Movie<br>
<input type="checkbox" name="act[]" value="Art Museum"/>Art Museum<br>
<input type="checkbox" name="act[]" value="Concert"/>Concert<br>
<input type="checkbox" name="act[]" value="History Museum"/>History Museum<br>
<input type="checkbox" name="act[]" value="Live Theatre"/>Live Theatre<br>
<input type="checkbox" name="act[]" value="Theme park"/>Theme Park<br>
<input type="checkbox" name="act[]" value="Swim"/>Swim<br><br>

<button class="button" name="submit"> Next</button>
</div>
</form>
</body>
</html> 