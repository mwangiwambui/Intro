<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
<form method="#" role='form' action="get">
	<input class="form-control" type="text" name="town">
	<input class="btn btn-success" type="submit" name="area" value="LOCATION">


</form>
</body>
</html>
<?php
if (isset($_GET['area'])) {
	
}
$town=$_GET['town'];
switch($town){
	case "Murang'a":
	echo "Wagikuyu";
	break;
	case 'Oloitoktok':
	echo "Wamaasai";
		break;
	case 'Machakos':
	echo "Wakamba";
		break;
	case 'Chuka':
		echo "Wameru";
		break;
		case 'Isiolo':
			echo "Borana";
			break;
			default: echo "Not determined for now";
			break;
}







?>