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
	$query=mysqli_query($conn,"Update fashion SET Q10='$q11' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('done.html'); </script>";
	}
}
?>
<body>
<div class="txt">
<h2>Do you follow current fashion trends?</h2>
<form action="" method="post">
<p><input type="radio" id="q1a" name="q11" value="Yes,I follow them closely">Yes,I follow them closely</p>
<p><input type="radio" id="q1b" name="q11" value="Yes,I don't really follow them">Yes,I don't really follow them</p>
<p><input type="radio" id="q1c" name="q11" value="No">No</p>
<input type="submit" value="vote">
<input type="Reset">
</div>
</form>
</body>
</html>