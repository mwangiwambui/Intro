<!DOCTYPE html>
<html>
<head>
	<title>MAID SOCIETY</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/don.css">
	
</head>
<style type="text/css">
.fr{
    padding: 12em;
}
body{
    background-color: #FFFFD4;
}
nav{
    background-color: #2A7FFF;
    color: white;
}
.ha{
    color: white;
}




</style>
<body data-spy="scroll" data-target=".navbar-fixed-top" class="fr">

   <nav class="navbar navbar-inverse navbar-fixed-top background">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="maid.php">MAMBOCH SOCIETY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="maid.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
      </ul>
    </div>
  </div>
</nav>


    






<div class="container">
    <div class="row">
        
            <div class="col-xs-6">
                <img src="img/one.jpg">

            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><i class="glyphicon glyphicon-log-in"></i> Log in!</legend>
            <form action="#" method="post" class="form content-section text-center" role="form">
            <div class="row">
                
                
            <input class="form-control" name="us" placeholder="Username" type="email" />
            <input class="form-control" name="p" placeholder="password" type="password" />
            
           
            
            <button class="btn btn-lg btn-primary btn-log" type="submit" name="log">
                Log in
            </button>
            </form>
            </div>
            </div>
            </div>
           


   
</body>
</html>
<?php
if (isset($_POST['log'])) {

    $username=$_POST['us'];
    $pass=$_POST['p'];
    $np=md5($pass);

    $con=mysqli_connect("localhost","root","","mamboch");
    $query="SELECT * from records where pe=($username) AND p='$np'";
    $exec=mysqli_query($query);
    $rows=mysqli_num_rows($exec);
    echo "$rows";

    # code...
}
















?>