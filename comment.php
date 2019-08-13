<?php
session_start();
require_once('dbconnection.php');
$sql = "INSERT INTO `comment` (`cmid`, `comnt`,`proid`,`postid`) VALUES (NULL, '".$_POST['comment']."','".$_SESSION['login']."','".$pd."')";
mysqli_query($con,$sql);
mysqli_close($con);
header("location:http://localhost/avi/welcome.php");

?>