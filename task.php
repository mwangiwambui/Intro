<!DOCTYPE html>
<html>
<head>
	<title>TASKS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/don.css">
</head>
<body class='fr background'>

<style type="text/css">
.fr{
    padding: 12em;
}
</style>

 <nav class="navbar navbar-inverse navbar-fixed-top background">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="task.php">TO_DO_LIST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">

        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
<form action="#" method="post" role='form'>

<input class="form-control" type="text" name="task" placeholder="Title">
 <label class="control-label col-sm-2" for="pwd">Your Tasks:</label>
     <textarea name=msg cols="7" rows="5" class="form-control" id="Message" placeholder="Your list"></textarea>
	<label>Expected Date of Completion:</label><input class="form-control" type="Date" name="date" placeholder="date">
	
	<input class="btn btn-success" type="submit" name="do" value="SAVE">
	<button><a href="view.php">Check tasks</a></button>

</form>
	


</div>
	</div>

</div>

</body>
</html>
<?php
if (isset($_POST['do'])) {
	$names=$_POST['task'];
	$msg=$_POST['msg'];
	$d=$_POST['date'];
	
	$con=mysqli_connect("localhost","root","","task");
	$q="Insert todo values('','$names','$msg','$d')";
	mysqli_query($con,$q);

	echo "Your task was saved";
	


	
}












?>