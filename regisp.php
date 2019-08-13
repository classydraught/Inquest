<?php
$host="localhost";
$user="root";
$password="";
$db="testdb";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $id=$_POST['Regno'];
  $ma=$_POST['email1'];
  $de=$_POST['Dea'];
  $sp=$_POST['Spe'];
  $pass=$_POST['pass'];
  $sql="INSERT INTO `professor` (`pname`, `pid`, `pmail`, `pdept`, `pspec`, `ppass`) VALUES ('".$name."', '".$id."', '".$ma."', '".$de."', '".$sp."', '".$pass."');";
  mysqli_query($con,$sql);
  mysqli_close($con);

}



?>

<!DOCTYPE html>
<html>
<head>
	
	<title>
		Registration
	</title>
	 <link href="css/bootstrap.css" rel="stylesheet"> 
	 <link href="registc.css" rel="stylesheet"> 
   
	 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">  
	 <span style="color: #fff;">
    <br>
	 <h1 align="center" style="font-family: 'Lobster';">Sign up</h1>
	</span>
</head>
<hr>
<body class="bg">
	
		
	<form action="regisp.php" method="post">
		<div align="center">
  <div class="form-group">
    
    <input type="text" class="form-control" name="username" placeholder="Full name">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="Regno" placeholder="Proffesor id">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="email1" placeholder="Enter email">
    
  </div>
</div>

  	<div class="form-group" >
<table> <tr><td> 		
  		<div class="form-group col-md-4" style="padding-left: 530px;">
    		<select name="Dea" class="form-control" style="width: 200px;">
       	 	<option selected>Department</option>
       	 	<option>IT</option>
        	<option>CSE</option>
        	<option>ECE</option>
        	<option>EEE</option>
        	<option>Management</option>
        	<option>Chemical</option>
        	<option>Mechanical</option>
        	<option>Petroleum</option>
        	<option>Food Technology</option>
        	<option>Bio Technology</option>
      		</select>
      	</td>
  		</div>
  		<td><div class="form-group col-md-4" style="padding-left: 40px;">
    		<select name="Spe" class="form-control" style="width: 200px;">
       	 	<option selected>Specialization</option>
       	 	<option>Computers</option>
        	<option>Sciences</option>
        	<option>Maths</option>
      		<option>Physics</option>
      		<option>Management</option>
      		</select></td>
</table>
<div align="center">
  <div class="form-group">
    
    <input type="password" class="form-control" name="pass" placeholder="Password">
    
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="cpass" placeholder="Confirm password">
    
  </div>
    <div class="form-group">
    
    <button type="submit" class="btn btn-primary" name="submit"><span style="font-family: 'Lobster'">Sign up</span></button>
    <br>
    <br>
    <button type="submit" class="btn btn-primary"><span style="font-family: 'Lobster'">login</span></button>
    
  </div></div> 	
</form>
<div id="particles-js"></div>
	 
  <script type="text/javascript" src="particles.js"></script>
  <script type="text/javascript" src="app.js"></script>
  
</body>
</html>