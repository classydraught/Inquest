<?php

session_start();
include("checklogin.php");
check_login();
$re=$_POST['sea'];

  
?>
<!DOCTYPE html>
<html>
<head>
	<title>search results</title>
	<link href="css/bootstrap.css" rel="stylesheet"> 
    
    

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
  </
</head>
<body class="container">
<br>
<div ><h1 style="font-family: lobster;">Posts realted to <?php echo "'"."$re"."'";?></h1></div>

<hr>
<br>
<?php
require_once('dbconnection.php');

$sql="select * from `blog` where  title='".$re."' or subtitle='".$re."'";
$result=mysqli_query($con,$sql);
    while (($row=mysqli_fetch_array($result))) {
      $title=$row['title'];
      $sub=$row['subtitle'];
      $content=$row['content'];
      $pid=$row['proid'];
      $dateb=$row['dateb'];
      $timeb=$row['timeb'];
      $posid=$row['id'];
      
      
 ?>
<div class="blog-post">
<h2 class="blog-post-title" style="font-family: raleway;"><a href=""><?php echo "$title";?></a></h2>
<p class="blog-post-meta"><?php echo "$sub"; ?> by <?php echo "$pid";?></p>
<span class="badge badge-light"><?php echo "$timeb";?></span>
 <span class="badge badge-light"><?php echo "$dateb";?></span>
<span class="badge badge-light"><?php echo "$posid";?></span>

<hr>
<p><?php echo "$content";?></p>

<br>
<?php
}
?>
</div>
    


</body>
</html>
