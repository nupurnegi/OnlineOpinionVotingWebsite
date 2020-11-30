<html>
<head>
<title>sports_Q6</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body align="center">
<?php
$x=1;
include ("connection.php");

if (isset($_POST['submit']))
{
		$checkbox1=$_POST["outgame"];
        $outgame="";
		$sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	    $row=mysqli_fetch_row($sql);
	    $v=$row[0];
		foreach($checkbox1 as $outgame1)
		{
			$outgame .= $outgame1.",";
		}
		
        $query=mysqli_query($conn,"UPDATE sports_indoor SET Q6=CONCAT(Q6, '$outgame') WHERE id='$v'");
	    if ($query)
	    {
		    echo "<script> window.location.replace('sports_Q_last.html'); </script>";
	    }
}
?>

<br><br>
<form action="" method="POST">
<div class="txt">
Which of the following indoor sports would<br> you perfer(one or more respose)?<br>
<input type="checkbox" name="outgame[]" value="Football"/>Football<br>
<input type="checkbox" name="outgame[]" value="Cricket"/>Cricket<br>
<input type="checkbox" name="outgame[]" value="Hockey"/>Hockey<br>
<input type="checkbox" name="outgame[]" value="Baseball"/>Baseball<br>
<input type="checkbox" name="outgame[]" value="Horse Ridding"/>Horse Ridding<br>
<input type="checkbox" name="outgame[]" value="Basketball"/>Basketball<br><br>


<button class="button" name="submit"> Next</button>
</div>
</form>
</body>
</html>