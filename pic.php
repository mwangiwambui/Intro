<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
<form action="#" method="post" role="form">
<label>SEARCH:</label>
<input class="form-control" type="text" name="user">

<input class="btn btn-succes" type="submit" name="look" value="SEARCH">
</form>



</body>
</html>
<?php
if (isset($_POST['look'])) {
	$text=$_POST['user'];
	echo "$text";

$servername = "localhost";
$username = "root";
$password = " ";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


}


?>