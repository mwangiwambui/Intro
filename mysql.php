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
	<input class="form-control" type="text" name="user">
	<input class="form-control" type="text" name="names">
	<input class="form-control" type="text" name="customer_id">
	<input class="form-control" type="text" name="order">
	<input class="form-control" type="text" name="gender">
	<input class="form-control" type="text" name="cell-phone">
	<input class="btn btn-success" type="submit" name="search" value="SEARCH"><br>
		<input class="btn btn-success" type="submit" name="delete" value="DELETE"><br>
			<input class="btn btn-success" type="submit" name="add" value="ADD"><br>


	
		

	</form>

	</div>
<body>

</body>
</html>

<?php

if (isset($_POST['search'])) {
	$user=$_POST['user'];

	
	$con=mysqli_connect("localhost","root","","hotel");
	$query="select*from customers where names='$user'";
	$sel=mysqli_query($con,$query);
	$data=mysqli_fetch_array($sel);
	echo "$data[0]";echo "$data[1]";echo "$data[2]";
}


if (isset($_POST['delete'])) {
	$user=$_POST['user'];

	$con=mysqli_connect("localhost","root","","hotel");
	$query="delete from customers where customer_id='$user'";
	$sel=mysqli_query($con,$query);

	echo "Deleted Successfully";

	

}
if (isset($_POST['add'])) {
	$user=$_POST['user'];

	$con=mysqli_connect("localhost","root","","hotel");
	$query="delete from customers where customer_id='$user'";
	$sel=mysqli_query($con,$query);

	echo "Deleted Successfully";
















?>
