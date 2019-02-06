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
	<label><h1>TYPE DATA HERE:</h1><br></label>

	<label>Patient name</label>
	<input class="form-control" type="text" name="user" placeholder="Patient name">
	
	<label>Male:</label><input class="form-control" type="radio" name="m" value="male">
	<label>Female:</label><input class="form-control" type="radio" name="m" value="female
	">
	 <select name='dis' class="form-control" id="sel1">
    <option>Typhoid</option>
    <option>Bilharzia</option>
    <option>Amoeba</option>
    <option>Aids</option>
  </select>
	
	<input class="form-control" type="text" name="town" placeholder="town">
	
			<input class="btn btn-success" type="submit" name="go" value="Reset"><br>
			<input class="btn btn-success" type="submit" name="add" value="Submit"><br>
<button><a href="hot.php">View data</a></button>

	
		

	</form>


	</div>
<body>

</body>
</html>
<?php
if (isset($_POST['add'])) {
	
	$names=$_POST['user'];
	$gender=$_POST['m'];
	$ailment=$_POST['dis'];
	$town=$_POST['town'];
	$con=mysqli_connect("localhost","root","","hospital");
	$q="Insert admision values('','$names','$gender','$ailment','$town')";
	mysqli_query($con,$q);

	echo "Data was entered successfully";
}



















?>





