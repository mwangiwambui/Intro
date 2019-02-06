<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
<div class="row">
	<div class="col-sm-12">
		<form action="#" method="post" role='form'>
		<input class="form-control" type="text" name="base">
		<input class="form-control" type="text" name="height">
		<input class="btn btn-success" type="submit" name="calc" value="Click here to calculate">
			

		</form>
	</div>

</div>
	

</div>
</body>
</html>
<?php
if(isset($_POST['calc'])){

$b=$_POST['base'];
$h=$_POST['height'];

$a=0.5*$b*$h;
echo "the answer is $a";
}














?>