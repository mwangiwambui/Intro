<!DOCTYPE html>
<html>
<head>
	<title>FUNCTIONS</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
<form action="#" method="get" role="form">
<label>VALUES:</label>
<input class="form-control" type="text" name="x">
<input class="form-control" type="text" name="y">
<input class="btn btn-succes" type="submit" name="submit" value="RESULT">
</form>
</div>
</div>
</div>
</body>
</html>


<?php
if (isset($_GET['submit'])) {
	$no1=$_GET['x'];
	$no2=$_GET['y'];



echo "<h4>SWAP</h4>";
function swap(){
	global $no1;
	global $no2;
	
$one=$no1;
$two=$no2;
$holder=$one;
$one=$two;
$two=$holder;
echo "First number changed to $one";
echo "<br>";
echo "Second number to $two";
echo "<br>";

}
swap();
echo "-------------------------------------------<br>";
echo("<h4>MULTIPLICATION</h4>");
function multiply(){
global $no1;
global $no2;

$k=$no1;
$w=$no1;
$w=$no2;
$a=$k*$w;

echo "The answer is $a";

}
multiply();
}

















?>