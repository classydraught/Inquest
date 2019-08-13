<?php
session_start();
include("checklogin.php");
check_login();

  
?>
<?php
require_once('dbconnection.php');
if(isset($_POST['submitp']))
{

  $ti=$_POST['title1'];
  $sti=$_POST['sub1'];
  $cont=$_POST['message'];
  date_default_timezone_set('Asia/Calcutta');
  $cur=date("h:i:s a");
  $curd=date("d/m/Y");;

  $sql = "INSERT INTO `blog` (`id`, `title`, `subtitle`, `content`,`proid`,`timeb`,`dateb`) VALUES (NULL, '".$ti."','".$sti."', '".$cont."','".$_SESSION['login']."','".$cur."','".$curd."');";
  mysqli_query($con,$sql);
  mysqli_close($con);


}

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
        <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
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




<div class="card" style="position: fixed;margin-left: 40px;">
  <div align="center">
  <img src="hh.jpg" alt="John" height="300" width="300">
</div>
  <h1 style="font-family: 'Lora'"><?php echo $_SESSION['name'];?></h1>
  <p class="title">Student</p>
  <p style="font-family: 'Raleway'">Department of <?php echo $_SESSION['dept'];?> </p>
  <p style="font-family: 'Arvo">Intrests : </p>
  <p style="font-family: 'Raleway"><?php echo $_SESSION['int1'].','.$_SESSION['int2'].','.$_SESSION['int3'];?></p>


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
    <label><h1>Your  Query/Post Box:</h1> </label>
    <form action="profile.php" method="post">
      <table>
        <tr>
          <td><input type="text" name="title1" placeholder="title" class="form-control" style="width: 300px; "></td>
        
          <td><input type="text" name="sub1" placeholder="subtitle" class="form-control" style="width: 300px;margin-left:95px;"></td>
        </tr>
      </table>
      <br>
  
    <textarea id="form_message" name="message" class="form-control" placeholder="Happy to recieve your Query" rows="4" required="required" style="width: 700px;" ></textarea>
  <br>
  <button type="submit" name="submitp" class="btn btn-primary" style="width: 140px;margin-left: 560px;font-family: 'Lobster'">post</button>
    </form>
    

  
    <br>
    <h1>Older posts</h1>
    <hr>
    
</div>
<div>
   <?php
  $dbCon = mysqli_connect("localhost","root","","bommil") or die(mysqli_error());
?> 
<?php
    
    $sql="select * from blog where proid='".$_SESSION['login']."' order by id DESC";
    $result=mysqli_query($dbCon,$sql);
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
