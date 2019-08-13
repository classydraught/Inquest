<?php
$host="localhost";
$user="root";
$password="";
$db="bommil";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $id=$_POST['Regno'];
  $ma=$_POST['email1'];
  $de=$_POST['Dea'];
  $sp=$_POST['Spe'];
  $in1=$_POST['i1'];
  $in2=$_POST['i2'];
  $in3=$_POST['i3'];
  
  $pass1=$_POST['pass'];
  $pass=md5($pass1);
  $image = $_FILES['image']['tmp_name'];
  $img = file_get_contents($image);
  $sql="INSERT INTO `student` (`sname`, `sid`, `smail`, `sdept`, `scourse`, `spass`,`inst1`,`inst2`,`inst3`,`propic`) VALUES ('".$name."', '".$id."', '".$ma."', '".$de."', '".$sp."', '".$pass."','".$in1."','".$in2."','".$in3."',?);";
   

  
  
$stmt = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($stmt, "s",$img);
$result=mysqli_stmt_execute($stmt);


  if ($result==1) {
    print_r("succesful") ;
     mysqli_close($con);
  }
  else
  {
    print_r("failed");
     mysqli_close($con);
  }

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
	
		
	<form action="regist.php" method="post" enctype="multipart/form-data">
		<div align="center">
  <div class="form-group">
    
    <input type="text" class="form-control" name="username" placeholder="Full name">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="Regno" placeholder="Register number">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="email1" placeholder="Enter email">
    
  </div>
</div>

  	<div class="form-group" >
<table> <tr>
  		<td><div class="form-group col-md-4" style="padding-left: 525px;">
    		<select name="Spe" class="form-control" style="width: 170px;">
       	 	<option selected>Course</option>
       	 	<option>B.Tech</option>
        	<option>Management</option>
        	<option>M.Tech</option>
      		<option>Pharmacy</option>
        	
      		</select></td>
          <td>    
      <div class="form-group col-md-4" style="padding-left: 65px;">
        <select  name="Dea" class="form-control" style="width: 200px;">
          
          <option selected>Department</option>
          <option>IT</option>
          <option>MBA</option>
          <option>BCA</option>
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
</table>
<table>
  <tr>
    <td><div class="form-group col-md-4" style="padding-left: 535px;">
        <select  name="i1" class="form-control" style="width: 120px;">
          
          <option selected>Intrest 1</option>
          <option>Artificial intelligence</option>
          <option>IOT</option>
          <option>Auto mobiles</option>
          <option>Maths</option>
          <option>Civils</option>
          <option>Networking</option>
          <option>Cyber Security</option>
          <option>Arts</option>
          <option>Finance</option>
          <option>Management</option>
          <option>Workshops</option>
          <option>Designing</option>
          </select>
        </div>
        </td>
  <td><div class="form-group col-md-4" >
        <select  name="i2" class="form-control" style="width: 120px;">
          
          <option selected>Intrest 2</option>
          <option>Artificial intelligence</option>
          <option>IOT</option>
          <option>Auto mobiles</option>
          <option>Maths</option>
          <option>Civils</option>
          <option>Networking</option>
          <option>Cyber Security</option>
          <option>Arts</option>
          <option>Finance</option>
          <option>Management</option>
          <option>Workshops</option>
          <option>Designing</option>
          </select>
        </div>
        </td>
  <td><div class="form-group col-md-4" >
        <select  name="i3" class="form-control" style="width: 120px;">
          
          <option selected>Intrest 3</option>
          <option>Artificial intelligence</option>
          <option>IOT</option>
          <option>Auto mobiles</option>
          <option>Maths</option>
          <option>Civils</option>
          <option>Networking</option>
          <option>Cyber Security</option>
          <option>Arts</option>
          <option>Finance</option>
          <option>Management</option>
          <option>Workshops</option>
          <option>Designing</option>
          </select>
        </div>
        </td>
  
  </tr>
</table>
<div align="center">
  <div class="form-group">
    
    <input type="password" class="form-control" name="pass" placeholder="Password">
    
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="cpass" placeholder="Confirm password">
    
  </div>
  <div class="custom-file" style="width:450px;">
  <input type="file" class="custom-file-input" id="customFile" name="image">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>  <br>
    <br>
    <div class="form-group">
    
    <button type="submit" class="btn btn-primary" name="submit"><span style="font-family: 'Lobster'">Sign up</span></button>
    <br>
    <br>
    <a href="index.php" class="btn btn-primary"><span style="font-family: 'Lobster'">login</span></a>
    
  </div></div> 	
</form>
<div id="particles-js"></div>
	 
  <script type="text/javascript" src="particles.js"></script>
  <script type="text/javascript" src="app.js"></script>
  
</body>
</html>