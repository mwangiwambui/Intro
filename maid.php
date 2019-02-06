<?php      
ob_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
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
      <a class="navbar-brand" href="maid.php">TO DO LIST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
       <form action="#" method="post" class="form content-section text-center" role="form">
           
                
                
            <input class="form-control" name="pe" placeholder="Username" type="email" >
            <input class="form-control" name="p" placeholder="password" type="password">
            
           
            
            <button class="btn btn-lg btn-primary btn-log glyphicon glyphicon-log-in" type="submit" name="log">
                Login
            </button>
            </form>
        
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
            <legend><i class="glyphicon glyphicon-user"></i> Sign up!</legend>
            <form action="#" method="post" class="form content-section text-center" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="fn" placeholder="First Name" type="text">
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="sn" placeholder="Surname" type="text">
                </div>
            
            <input class="form-control" name="pe" placeholder="Your Email" type="email">
            <input class="form-control" name="pe" placeholder="Re-enter Email" type="email">
            <input class="form-control" name="p" placeholder="New Password" type="password">
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">

                   <select class="form-control" name="y">
    <option>year</option>
    <option>1980</option>
    <option>1981</option>
    <option>1982</option>
    <option>1983</option>
    <option>1984</option>
    <option>1985</option>
    <option>1986</option>
    <option>1987</option>
    <option>1988</option>
    <option>1989</option>
    <option>1990</option>
    <option>1991</option>
    <option>1992</option>
    <option>1993</option>
    <option>1994</option>
    <option>1995</option>
    <option>1996</option>
    <option>1997</option>
    <option>1998</option>
    <option>1999</option>
    <option>2000</option>
    <option>2001</option>
    <option>2002</option>
    <option>2003</option>
    <option>2004</option>
    <option>2005</option>
    <option>2006</option>
    <option>2007</option>
    <option>2008</option>
    <option>2009</option>
    <option>2010</option>
    <option>2011</option>
    <option>2012</option>
    <option>2013</option>
    <option>2014</option>
    <option>2015</option>
    <option>2016</option>
    <option>2017</option>
</select>
                </div>
                <div class="col-xs-4 col-md-4">
                   <select class="form-control" name="m" >
<option>month</option>
<option>JANUARY</option>
<option>FEBRUARY</option>
<option>MARCH</option>
<option>APRIL</option>
<option>MAY</option>
<option>JUNE</option>
<option>JULY</option>
<option>AUGUST</option>
<option>SEPTEMBER</option>
<option>OCTOBER</option>
<option>NOVEMBER</option>
<option>DECEMBER</option>



</select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="d">
    <option>day</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>
    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>
    <option>31</option>
</select>
                </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="g" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="g" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br>
            <br>
            <button class="btn btn-lg btn-primary btn-log" type="submit" name="sign">
                Create an account
            </button>
            </form>
            </div>
            </div>
            </div>
           


   
</body>
</html>
<?php
session_start();

if (isset($_POST['sign'])) {
    $fn=$_POST['fn'];
    $sn=$_POST['sn'];
    $pe=$_POST['pe'];
    $g=$_POST['g'];
    $d=$_POST['d'];
    $m=$_POST['m'];
    $y=$_POST['y'];
    $p=$_POST['p'];

$np=md5($p);

$con=mysqli_connect("localhost","root","","mamboch");
$query="insert into records values('','$fn','$sn','$pe','$g','$d','$m','$y','$np')";

$exec=mysqli_query($con,$query);

echo "successful";

}




if (isset($_POST['log'])) {

    $username=$_POST['pe'];       
    $pass=$_POST['p'];
    $np=md5($pass);
    $_SESSION['email']="$username";

    $con=mysqli_connect("localhost","root","","mamboch");
    $query="SELECT * from records where pe='$username' AND p='$np'";
    $exec=mysqli_query($con,$query);
    $rows=mysqli_num_rows($exec);
    echo "$rows";

if ($rows>0) {
    header("Location:dash.php");
}
    else{echo"Access denied";
    }


    
}




















?>
