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
	<title>test</title>
  <link rel="stylesheet" type="text/css" href="hellot.css">
	  
	<h1 align="center">test</h1>
	<hr>
</head>
<form method="post" action="hello.php">
  <input type="text" name="u_name">
  <input type="password" name="pass">
  <button name="hello">submit</button>
  
</form>
  <a class="button" href="#popup1">Let me Pop up</a>

<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Here i am</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      <button>Student</button>
      <button>Professor</button>
    </div>
  </div>
</div>
</body>
</html>