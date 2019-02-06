<!DOCTYPE html>
<html>
<head>
	<title>mysql</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
	<form action="#" method="post" role='form'>
	<label>TYPE DATA HERE:</label>
	<input class="form-control" type="text" name="user" placeholder="name">
	
	<input class="form-control" type="text" name="orders" placeholder="order">
	<input class="form-control" type="text" name="gender" placeholder="gender">
	<input class="form-control" type="text" name="cell_phone" placeholder="cell_phone">
	
			<input class="btn btn-success" type="submit" name="add" value="INSERT"><br>
			<input class="btn btn-success" type="submit" name="go" value="REFRESH"><br>


	
		

	</form>

	</div>
<body>

</body>
</html>

<?php

if (isset($_POST['add'])) {
	$names=$_POST['user'];
	
	$orders=$_POST['orders'];
	$gender=$_POST['gender'];
	$cell_phone=$_POST['cell_phone'];


	$con=mysqli_connect("localhost","root","","hotel");
	$q="Insert into customers values('','$names','$orders','$gender','$cell_phone')";
	mysqli_query($con,$q);

	echo "Data was inserted successfully";
}










?>