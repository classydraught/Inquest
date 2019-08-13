<?php
$host="localhost";
$user="root";
$password="";
$db="testdb";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['hello']))
{
if(isset($_POST['u_name']))
{
	$name=$_POST['u_name'];
	$pswrd=$_POST['pass'];
	$sql="select * from users where uname='".$name."' AND pswd='".$pswrd."' limit 1";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==1)
	{
		print_r("login succesful");
		header('Location:index.php');
		exit();
	}
	else
	{
		echo "you may have entered  wrong data";
		exit();
	}

}

}

?>


<html>
<head>
	<title>INQUEST</title>
	<link href="css/bootstrap.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">  

    
	
	
	<h1 align="left" style="font-family: 'Lobster';">
		<font color="white">Inquest</font>
		
	</h1>
	<h6 style="font-family: 'Raleway'"><font color="white">An intiavtive of Vignan's demmed to be a university.</font></h6>
</head>

<body background="22.jpg" style="opacity: 1;">
		<link rel="stylesheet" type="text/css" href="style.css">
	<h6 style="font-family: 'Raleway';"><font color="white">Hope you got solution to your query.</font></h6>
	<hr style="width: 370px;" align="left">

	<form>
  <div class="form-group">
    <label style="font-family: 'Raleway';"><font color="white">Email address</font></label>
    <input type="email" class="form-control" name="u_name" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label style="font-family: 'Raleway';"><font color="white">Password</font></label>
    <input type="password" class="form-control" name="pass" placeholder="Password" >
  </div>
  
	<div>
			<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</body>
</html>

