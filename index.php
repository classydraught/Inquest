<?php
session_start();
require_once('dbconnection.php');

if(isset($_POST['login']))
{
$password=$_POST['pass'];
$decp=md5($password);


$useremail=$_POST['u_name'];
$ret= mysqli_query($con,"SELECT * FROM student WHERE sid='$useremail' and spass='$decp'");
$ren= mysqli_query($con,"SELECT sname FROM student WHERE sid='$useremail' and spass='$decp'");

$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="profile.php";
$_SESSION['login']=$_POST['u_name'];
$_SESSION['name']=$num['sname'];
$_SESSION['dept']=$num['sdept'];
$_SESSION['int1']=$num['inst1'];
$_SESSION['int2']=$num['inst2'];
$_SESSION['int3']=$num['inst3'];

$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}

?>

<html>
<head>
	<title>INQUEST</title>
	<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="hellot.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">  

    
	
	
	<h1 align="left" style="font-family: 'Lobster';">
		<font color="white">Inquest</font>
		
	</h1>
	<h6 style="font-family: 'Raleway'"><font color="white">An intiavtive of Vignan's deemed to be a university.</font></h6>
</head>

<body background="22.jpg" style="opacity: 1;">	
		<link rel="stylesheet" type="text/css" href="style.css">
	<h6 style="font-family: 'Raleway';"><font color="white">Hope you got solution to your query.</font></h6>
	<hr style="width: 370px;" align="left">

	<form action="" method="post">
  <div class="form-group">
  	<label style="font-family: 'Raleway';"><font color="white">Student/Professor id</font></label>
    <input type="text" class="form-control" name="u_name" placeholder="Student/Professor id">
  </div>
  <div class="form-group">
    <label style="font-family: 'Raleway';"><font color="white">Password</font></label>
    <input type="password" class="form-control" name="pass" placeholder="Password" >
  </div>
  
	<div>
			<button type="submit" class="btn btn-primary" name="login" style="font-family: Lobster; width:75">login</button>
	    <a class="btn btn-primary" href="#popup1" style="font-family: Lobster">sign up</a>

  <div id="popup1" class="overlay">
    <div class="popup">
      <h2 style="font-family: Raleway;" align="center">Choose account type</h2>
      <hr>
      <a class="close" href="#">&times;</a>
      <h5 style="font-family: Lobster;"align="center">Terms and conditions:</h5>
      <div class="content" style="font-family: Raleway;">
      	<p>Terms of service (also known as terms of use and terms and conditions, commonly abbreviated as TOS or ToS and ToU) are rules by which one must agree to abide in order to use a service.[1] Terms of service can also be merely a disclaimer, especially regarding the use of websites. </p>
      	<br>
        <a href="regist.php" class="btn btn-primary" style="font-family: Lobster;margin-left: 120px;">student</a>
      <a href="regisp.php" class="btn btn-primary" style="font-family: Lobster;margin-left: 20px;">professor</a>
     
      </div>
    </div>
  </div>
	</div>
	

</form>
	
</body>
</html>

