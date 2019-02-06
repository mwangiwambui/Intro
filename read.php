<!DOCTYPE html>
<html>
<head>
	<title>MESSAGE</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<div class="container-fluid">
<div class="row"></div>
<div class="col-sm-12">
<form class="form-horizontal" role="form">

<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Your message:</label>
     <textarea cols="15" rows="5" class="form-control" id="Message" placeholder="Message"></textarea>
      
      <input class="btn btn-success" type="submit" name="subm" value="back">
     

    </div>
    
</form>
</div>
</div>

</table>
</body>
</html>
<?php
if (isset($_GET['subm'])) {
	header('Location:big.php');

}





?>
