<?php
session_start();
include("checklogin.php");
check_login();

  
?>
<?php
$so=$_POST['pro'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>profile</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  </head>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#"><span style="font-family: 'Lobster';font-size: 30px;margin-left: 25px;">Inquest</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="results.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="sea">
      <button class="btn btn-outline-success my-2 my-sm-0" style="width: 90px;" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>
<body>
   <div class="row">
  <div class="col-sm-3"><style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<?php
  $dbCon = mysqli_connect("localhost","root","","bommil") or die(mysqli_error());
  
    $sql="select * from blog where proid='".$so."' order by id DESC";
    $result=mysqli_query($dbCon,$sql);
    $sq3="select * from student where sid='".$so."' ";
    $resu=mysqli_query($dbCon,$sq3);
    $ro=mysqli_fetch_array($resu);
    $na=$ro['sname'];
    $de=$ro['sdept'];
    $it1=$ro['inst1'];
    $it2=$ro['inst2'];
    $it3=$ro['inst3'];
    
?> 



<div class="card" style="position: fixed;margin-left: 40px;">
  <div align="center">
  <img src="hh.jpg" alt="John" height="300" width="300">
</div>
  <h1 style="font-family: 'Lora'"><?php echo $na;?></h1>
  <p class="title">Student</p>
  <p style="font-family: 'Raleway'">Department of <?php echo $de;?> </p>
  <p style="font-family: 'Arvo">Intrests : </p>
  <p style="font-family: 'Raleway"><?php echo $it1.','.$it2.','.$it3;?></p>


  <div style="margin: 24px 0;">
   <a href="https://www.facebook.com/lalitha.lalitha.73345"><img src="f.png" height="32" width="32"></a>
    <a href="https://www.instagram.com"><img src="i.png" height="32" width="32"></a>
    <a href="https://www.twitter.com"> <img src="t.png" height="32" width="32"></a>
    <a href="https://www.linkedin.com"> <img src="in.png" height="32" width="32"></a>
 </div>
<p><button>Contact</button></p>
</div>
</div>
<div class="col-sm-8">
  
  <div>

<?php
    
    while (($row=mysqli_fetch_array($result))) {
      $title=$row['title'];
      $sub=$row['subtitle'];
      $content=$row['content'];
      $timeb=$row['timeb'];
      $dateb=$row['dateb'];     
 ?>
 <h2 style="font-family: raleway;"><?php echo"$title";?></h2><span class="badge badge-primary"><?php echo "$sub";?> </span>
 <span class="badge badge-light"><?php echo "$timeb";?></span>
 <span class="badge badge-light"><?php echo "$dateb";?></span>
 
 <hr>
 <blockquote><?php echo "$content"; ?></blockquote>
 <form action="comment.php" method="post">
  <table><tr><td>
<textarea class="form-control" style="width: 600px;" placeholder="comment" rows="1"></textarea>
</td> 
<td>
<button class="btn btn-outline-primary" style="margin-left: 100px;">comment</button>
</td>
</tr>
</table>
<br>
 <?php 
}
?>
</div>

</div>
</div>
</div> 

</body>
</html>
