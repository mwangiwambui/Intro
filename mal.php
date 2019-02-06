<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<button><a href="adm.php">Insert Data</a></button>
<button><a href="view.php">View Data</a></button>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","hospital");

$query="SELECT * FROM admision";

$executequery=mysqli_query($con,$query);
echo "<table class=table table-bordered border=20>
<td>ID</td><td>NAME</td><td>gender</td><td>ailment</td><td>town</td>";

while($selection=mysqli_fetch_array($executequery)){
 echo "

<tr>








 <td>$selection[0]</td><td>$selection[1]</td><td>$selection[2]</td><td>$selection[3]</td><td>$selection[4]</td>

</tr>
 ";
}
echo "</table>";

?>