<!DOCTYPE html>
<html>
<head>
	<title>SECOND</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<form action="#" method="get" role='form'>
<label>WHICH IS GREATER</label>

	<input class="form-control" type="text" name="value1">
	<input class="form-control" type="text" name="value2">
	<input class="form-control" type="text" name="value3">
	<input class="btn btn-success" type="submit" name="submit" value="submit">

	
	

</form>
</div>
</div>
</div>

</body>
</html>
<?php
if(isset($_GET['submit'])){
$user_grade=$_GET['value1'];
$user_grade1=$_GET['value2'];
$user_grade2=$_GET['value3'];

if ($user_grade>$user_grade1 and $user_grade>$user_grade2) {
	echo "$user_grade";
}

	else if ($user_grade1>$user_grade and $user_grade1>$user_grade2) {
	echo "$user_grade1";

}
else if($user_grade2>$user_grade and $user_grade2>$user_grade1) {
	echo "$user_grade2";
}
else{echo "invalid input";
}
}








?>



