<!DOCTYPE html>
<html>
<head>
	<title>COUNT</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
<form action="#" method="post" role="form">
<label>VALUES:</label>
<input class="form-control" type="number" name="number">

<input class="btn btn-succes" type="submit" name="give" value="RESULT">
</form>
</div>
</div>
</div>

</body>
</html>

<?php

if (isset($_POST['give'])) {
	# code...

for ($k=0; $k <100 ; $k=$k+2) { 
	echo "$k<br>";
}
}








?>