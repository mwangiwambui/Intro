<!DOCTYPE html>
<html>
<head>
	<title>GRADES</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row" align="center">
	<div class="col-sm-12">
		<form action="#" method="get" role='form'>
		<label>TYPE YOUR GRADE</label>
		<input class="form-control" type="text" name="grade" placeholder="YOUR GRADE HERE">
		<input class="btn btn-success" type="submit" name="submit" value="submit">
		
		</form>
	</div>
		
	</div>
</div>
</body>
</html>
<?php

if(isset($_GET['submit'])){

$user_grade=$_GET['grade'];
if ($user_grade>=80 and $user_grade<=100) {
	echo "Excellent";
}
elseif ($user_grade>=70 and $user_grade<=79) {
	echo "Very Good";
}
elseif ($user_grade>=60 and $user_grade<=69) {
	echo "Good";
}
elseif ($user_grade>=50 and $user_grade<=59) {
	echo "Fair";
}
elseif ($user_grade>=0 and $user_grade<=49) {
	echo "Poor";
}
else{
	echo "Invalid input";
}






}






?>