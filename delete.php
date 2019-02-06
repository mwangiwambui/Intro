<?php
$item=$_GET['id'];

$con=mysqli_connect("localhost","root","","task");
$query="DELETE FROM todo WHERE id='$item'";
$executequery=mysqli_query($con,$query);

header("Location:view.php") 

?>