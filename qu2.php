<!DOCTYPE html>
<html>
<head>
	<title>BONGA POINTS</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<div class="container-fluid">
<div class="row">
	<div class="col=sm-12">
	<form action="#" method="get" role='form'>
	<input class="form-control" type="text" name="points" placeholder="Enter your points">
	<input class="btn btn-success" type="submit" name="submit" value="SEND"><br>
	
		

	</form>

	</div>
</div>
</div>


</body>
</html>
<?php
if (isset($_GET['submit'])) {
	$a=$_GET['points'];
		if ($a>=0 and $a<=300) {
			echo "No Award. Please Continue Using our services to qualify.<br> No tax is paid";
		}
		else if ($a>=301 and $a<=999) {

			
			echo "YOU WIN A SMART PHONE. <br>";
			$b=$a*2/100;
			echo "TAX=$b";

		}
		else  if ($a>=1000 and $a<=3000) {
			
			echo "YOU WIN A NEW SAMSUNG TABLET. <br>";
			$b=$a*5/100;
			echo "TAX=$b";
		}
		else if ($a>=3001 and $a<=5000) {
			
			echo "YOU WIN A NEW CAR.<br>";
			$b=$a*5/100;
			echo "TAX=$b";
		}
		else if ($a>=5001 and $a<=7000) {
			
		echo "SUPER AWARD. TRIP TO US.<br>";
		$b=$a*8/100;
		echo "TAX: $b";
	}
		else if ($a>=7001 and $a<=10000) {
			
			echo "YOU WIN A NEW HOUSE.<br>";
			$b=$a*10/100;
			echo "TAX: $b";
		}
		elseif ($a>10000) {
			echo "INVALID POINTS<br>No tax is paid";

		}
		else{
			echo "INVALID INPUT";
		}
	}







?>