<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/don.css">
<body class="background">

<button class="btn btn-link"><a href="task.php">Insert Data</a></button>
<button class="btn btn-link"><a href="view.php">View Data</a></button>
<form action="#" method="get" role='form'>
<button class="btn btn-lg btn-primary btn-search glypicon glypicon-search" name='search'>SEARCH TASK</button>
<input class="width" class="form-control" type="text" name="complete">

</form>
</html>
<?php
if (isset($_GET['search'])) {
	$go=$_GET['complete'];
	
$con=mysqli_connect("localhost","root","","task");

$query="SELECT * FROM todo where task_names='$go'";

$executequery=mysqli_query($con,$query);
echo "<table class=table table-bordered border=20>
<td>ID</td><td>Name of Task</td><td>tasks</td><td>Expected date of completion</td><td>Tick if task is done</td><td>Action</td>";

while($selection=mysqli_fetch_array($executequery)){
	$id=$selection[0];
 echo "

<tr>








 <td>$selection[0]</td><td>$selection[1]</td><td>$selection[2]</td><td>$selection[3]</td><td><input type='checkbox'></input></td><td><a href='delete.php?id=$id'>Delete</a></td>

</tr>
 ";
}
echo "</table>";

}

$con=mysqli_connect("localhost","root","","task");

$query="SELECT * FROM todo";

$executequery=mysqli_query($con,$query);
echo "<table class=table table-bordered border=20>
<td>ID</td><td>Name of Task</td><td>tasks</td><td>Expected date of completion</td><td>Tick if task is done</td><td>Action</td>";

while($selection=mysqli_fetch_array($executequery)){
	$id=$selection[0];
 echo "

<tr>








 <td>$selection[0]</td><td>$selection[1]</td><td>$selection[2]</td><td>$selection[3]</td><td><input type='checkbox'></input></td><td><a href='delete.php?id=$id'>Delete</a></td>

</tr>
 ";
}
echo "</table>";

?>