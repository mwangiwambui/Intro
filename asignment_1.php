<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNMENT</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<form action="#" method="get" role='form'>
<label>TYPE OF VALUE</label>
	<input class="form-control" type="text" name="value" placeholder="value">
	<input class="btn btn-success" type="submit" name="submit" value="test">

</form>
	
</div>
	
</div>
	
</div>
</body>
</html>

<?php


if (isset($_GET['submit'])) {
$submit=$_GET['value'];	
		if ($submit>0) {
			echo "Positive";
		}
		elseif ($submit<0){
			echo "Negative";
		}
		else{
			echo "Zero";
		}
	}








?>






