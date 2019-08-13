<?php
$host="localhost";
$user="root";
$password="";
$db="learn1";

 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['submitp']))
{

  $ti=$_POST['title1'];
  $sti=$_POST['sub1'];
  $cont=$_POST['message'];
  $sql = "INSERT INTO `blog` (`id`, `title`, `subtitle`, `content`) VALUES (NULL, '".$ti."','".$sti."', '".$cont."');";
  mysqli_query($con,$sql);
  mysqli_close($con);


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>profile</title>
</head>
<body>
  <img src="hh.jpg" alt="John"  style="width:70%">
</div>
  <h1 style="font-family: 'Lora'">AVINASH</h1>
  <p class="title">Professor</p>
  <p style="font-family: 'Raleway'">Department of Hacker</p>
  <p style="font-family: 'Arvo">Intrests : </p>
  <p style="font-family: 'Raleway">Coding,Artificial intelligence,IOT.</p>
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
  $dbCon = mysqli_connect("localhost","root","","learn1") or die(mysqli_error());
?> 
<?php
    $sql= "select * from blog order by id DESC";
    $result=mysqli_query($dbCon,$sql);
    while (($row=mysqli_fetch_array($result))) {
      $title=$row['title'];
      $sub=$row['subtitle'];
      $content=$row['content'];
      
 ?>
 <h2><?php echo"$title";?></h2><span class="badge badge-light"><?php echo "$sub";?></span>
 <hr>
 <blockquote><?php echo "$content"; ?></blockquote>
 <?php 
}
?>
</div>

</div>
</div>
</div> 

</body>
</html>