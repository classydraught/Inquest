<?php 
session_start();
include('dbconnection.php');
if(isset($_POST['login']))
{
	$password=$_POST['pass'];
	
$ret= mysql_query("SELECT * FROM student WHERE sname='".$_POST['u_name']."' and spass='$password'");
$num=mysql_fetch_array($ret);
if($num>0)
{
	
	$extra="profile.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}


?>