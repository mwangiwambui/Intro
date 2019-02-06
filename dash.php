<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<button><a href="maid.php">Log in</a></button>

</body>
</html>
<?php
session_start();

$sth=$_SESSION['email'];

echo "Welcome: you logged in using $sth";
$con=mysqli_connect("localhost","root","","mamboch");

$query="SELECT * FROM records";

$executequery=mysqli_query($con,$query);
echo "<table class=table table-bordered border=20>
<td>ID</td><td>First Name</td><td>Second Name</td><td>email</td><td>gender</td><td>date of birth</td><td>Action</td>";

while($selection=mysqli_fetch_array($executequery)){
	$id=$selection[0];
 echo "

<tr>








 <td>$selection[0]</td><td>$selection[1]</td><td>$selection[2]</td><td>$selection[3]</td><td>$selection[4]</td><td>$selection[5]/$selection[6]/$selection[7]</td><td><a href='delete.php?id=$id'>Delete</a></td>

</tr>
 ";
}
echo "</table>";



?>