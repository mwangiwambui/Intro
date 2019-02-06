<!DOCTYPE html>
<html>
<head>
	<title>FUNC 2</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
<form action="#" method="get" role="form">
<label>VALUES:</label>
<input class="form-control" type="text" name="b">
<input class="form-control" type="text" name="h">
<input class="btn btn-succes" type="submit" name="submit" value="RESULT">
</form>
</div>
</div>
</div>

</body>
</html>
<?php
if (isset($_GET['submit'])) {
	$a=$_GET['b'];
	$b=$_GET['h'];
	function AOT($w,$x){
		$result=$w*$x*0.5;
		echo "$result";
	}
	AOT($a,$b);
	
}






?>

