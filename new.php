<!DOCTYPE html>
<html>
<head>
	<title>NEW</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<form method="#" action="get" role='form'>
	<input type="number" name="no1">
	<input type="number" name="no2">
	<input type="number" name="no3">
	<input class="btn btn-success" type="submit" name="submit">


</form>
</body>
</html>
<?php
if (isset($_GET['submit'])) {
	$one=$_GET['no1'];
	$two=$_GET['no2'];
	$three=$_GET['no3'];
	$number=array('$one','$two','$three');
	$sum=0;
	for ($i=0; $i <3 ; $i++) {
		$sum=$sum+$number['$i'];
		$avg=$sum/3;
echo "$avg";
	}
	
}







?>